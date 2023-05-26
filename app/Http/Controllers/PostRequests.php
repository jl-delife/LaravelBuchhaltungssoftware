<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\validVariableLength;

class PostRequests extends Controller
{
    // Überprüft die Länge von Benutzername und Passwort
    function invalidVariableLength($username, $password)
    {
        $usernameLength = strlen($username);
        $passwordLength = strlen($password);

        if (!(($usernameLength >= 3 && $usernameLength <= 15) && ($passwordLength >= 4 && $passwordLength <= 15) && !preg_match('/\s/', $username) && !preg_match('/\s/', $password))) {
            return true;
        } else {
            return false;
        }
    }

    // Verarbeitet den Registrierungs-POST-Request
    public function RegisterRequest(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($this->invalidVariableLength($username, $password)) {
            return view('register', [
                'error' => 'Ungültige Länge von Benutzername/Passwort!',
            ]);
        }

        // Überprüft, ob der Benutzername bereits existiert
        $existingUser = DB::connection('mysql')
            ->table('users')
            ->where('username', $username)
            ->first();

        if ($existingUser) {
            return view('register', [
                'error' => 'Bitte benutze einen anderen Benutzernamen!',
            ]);
        }

        if (!$existingUser) {
            // Fügt den neuen Benutzer in die Datenbank ein
            $userInsertSuccess = DB::connection('mysql')
                ->table('users')
                ->insert([
                    'username' => $username,
                    'password' => $password,
                    'balance' => 0,
                ]);

            if ($userInsertSuccess) {
                return view('login', [
                    'success' => 'Erfolgreich registriert!',
                ]);
            }

            if (!$userInsertSuccess) {
                return view('register', [
                    'error' => 'Fehler beim Eintragen in die Datenbank!',
                ]);
            }
        }
    }

    // Verarbeitet den Login-POST-Request
    public function LoginRequest(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $transactionId = $request->input(('transactionId'));
        $newTransaction = false;

        if (isset($username) && $this->invalidVariableLength($username, $password)) {
            return view('login', [
                'error' => 'Ungültige Länge von Benutzername/Passwort!',
            ]);
        }

        if (!empty($username)) {
            // Überprüft, ob der Benutzer existiert und die Anmeldedaten korrekt sind
            $existingUser = DB::connection('mysql')
                ->table('users')
                ->where('username', $username)
                ->where('password', $password)
                ->count();

            if ($existingUser == 1) {
                // Ruft die ID des Benutzers ab
                $userId = DB::connection('mysql')
                    ->table('users')
                    ->select('id')
                    ->where('username', $username)
                    ->where('password', $password)
                    ->get();

                $id = $userId[0]->id;
            }

            if ($existingUser != 1) {
                return view('login', [
                    'error' => 'Ungültige Anmeldedaten!',
                ]);
            }
        }

        if ($transactionId != null && !empty($transactionId)) {
            $id = $transactionId;
            $newTransaction = true;
        }

        // Ruft den Benutzernamen, das Guthaben und die Transaktionen des Benutzers ab
        $name = DB::connection('mysql')
            ->table('users')
            ->select('username')
            ->where('id', $id)
            ->get()[0]->username;

        $balance = DB::connection('mysql')
            ->table('users')
            ->select('balance')
            ->where('id', $id)
            ->get()[0]->balance;

        $transactionResult = DB::connection('mysql')
            ->table('transactions')
            ->select('name', 'date', 'amount')
            ->where('userID', $id)
            ->get();

        $transactions = [];

        foreach ($transactionResult as $transaction) {
            $transactions[] = [$transaction->name, $transaction->date, $transaction->amount];
        }

        return redirect()->route('home')->with([
            'id' => $id,
            'name' => $name,
            'balance' => $balance,
            'transactions' => $transactions,
            'transactionSuccess' => $newTransaction ? 'Transaktion erfolgreich hinzugefügt.' : null,
        ]);
    }

    // Verarbeitet den Transaktions-POST-Request
    public function TransactionsRequest(Request $request)
    {
        $name = $request->input('transactionName');
        $amount = str_replace(',', '.', $request->input('transactionAmount'));
        $date = $request->input('transactionDate');
        $id = $request->input('transactionId');

        // Funktion zur Überprüfung des Datumsformats
        function isDate($input)
        {
            $date = \DateTime::createFromFormat("Y-m-d", $input);
            return $date && $date->format("Y-m-d") === $input;
        }

        // Funktion zur Überprüfung des Betragsformats
        function isValidMoneyAmount($input)
        {
            $pattern = '/^-?\d+(\.\d{1,2})?$/';
            return preg_match($pattern, $input) || is_int($input);
        }

        // Funktion zur Überprüfung des Transaktionsnamens
        function isValidTransactionName($input)
        {
            return (strlen($input) >= 1 && strlen($input) <= 25 && strlen(trim($input)) >= 1);
        }

        if (isDate($date) && isValidMoneyAmount($amount) && isValidTransactionName($name)) {
            // Berechnet das neue Guthaben basierend auf der Transaktion
            $oldBalance = (float)DB::connection('mysql')
                ->table('users')
                ->select('balance')
                ->where('id', $id)
                ->get()[0]->balance;

            $newBalance = $oldBalance + (float)$amount;

            // Fügt die Transaktion in die Datenbank ein
            $insertTransaction = DB::connection('mysql')
                ->table('transactions')
                ->insert([
                    'name' => $name,
                    'date' => $date,
                    'amount' => $amount,
                    'userID' => $id,
                ]);

            // Aktualisiert das Guthaben des Benutzers
            $changeUserBalance = DB::connection('mysql')
                ->table('users')
                ->where('id', $id)
                ->update(['balance' => $newBalance]);

            return $this->LoginRequest($request);
        } else {
            return view('login', [
                'error' => 'Ungültiges Datum, ungültiger Geldbetrag oder ungültige Länge!',
            ]);
        }
    }
}
