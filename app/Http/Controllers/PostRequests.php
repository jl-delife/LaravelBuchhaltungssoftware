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
        $transactionId = $request->input('userId');
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


        //dd($categoryResult[0]->category);

        function getColor($category)
        {
            switch ($category) {
                case 'food':
                    return '#ff0000';
                case 'restaurants':
                    return '#0000ff';
                case 'shopping':
                    return '#00ff00';
                case 'transportation':
                    return '#ffff00';
                case 'living':
                    return '#ffa500';
                case 'travel':
                    return '#800080';
                case 'health':
                    return '#00ffff';
                case 'education':
                    return '#ffc0cb';
                case 'wage':
                    return '#808080';
                case 'other':
                    return '#008080';
            }
        }

        $totoalAmountAndCategoryOfAllTransactions = DB::connection('mysql')
            ->table('transactions')
            ->select('amount', 'category')
            ->where('userID', $id)
            ->get();

        $existingCategoriesAmountAndCategory = [];

        foreach ($totoalAmountAndCategoryOfAllTransactions as $transaction) {
            if (!array_key_exists($transaction->category, $existingCategoriesAmountAndCategory)) {
                $existingCategoriesAmountAndCategory[$transaction->category] = [
                    "amount" => $transaction->amount,
                    "color" => getColor($transaction->category),
                    "count" => 1,
                ];
            } else {
                $existingCategoriesAmountAndCategory[$transaction->category]["amount"] += $transaction->amount;
                $existingCategoriesAmountAndCategory[$transaction->category]["count"]++;
            }
        }

        //dd($existingCategoriesAmountAndCategory);


        return redirect()->route('home')->with([
            'id' => $id,
            'name' => $name,
            'balance' => $balance,
            'transactions' => $transactions,
            'transactionSuccess' => $newTransaction ? 'Transaktion erfolgreich hinzugefügt.' : null,
            'categoryInformation' => $existingCategoriesAmountAndCategory,
        ]);
    }

    // Verarbeitet den Transaktions-POST-Request
    public function TransactionsRequest(Request $request)
    {
        $name = $request->input('transactionName');
        $amount = str_replace(',', '.', $request->input('transactionAmount'));
        $date = $request->input('transactionDate');
        $userId = $request->input('userId');
        $transactionId = $request->input('transactionId');
        $category = $request->input('category');

        // Funktion zur Ermittlung der Kategorie
        function getCategory($name)
        {
            $transactionCategories = [
                "food" => [
                    "lidl",
                    "aldi",
                    "rewe",
                    "edeka",
                    "netto",
                    "penny",
                    "kaufland",
                    "real",
                    "norma",
                    "marktkauf",
                    "lebensmittel",
                    "supermarkt",
                    "discounter",
                    "nahrungsmittel",
                    "einkauf",
                    "supermarkt",
                    "lebensmittelgeschäft",
                ],
                "restaurants" => [
                    "restaurant",
                    "café",
                    "imbiss",
                    "pizzeria",
                    "sushi-bar",
                    "bäckerei",
                    "eisdiele",
                    "döner",
                    "gaststätte",
                    "fast-food-restaurant",
                    "gourmet",
                    "speiselokal",
                    "brasserie",
                    "steakhaus",
                    "barbecue",
                    "kantine",
                ],
                "shopping" => [
                    "h&m",
                    "zara",
                    "media markt",
                    "saturn",
                    "büromarkt",
                    "drogerie",
                    "schuhgeschäft",
                    "elektronikladen",
                    "möbelhaus",
                    "baumarkt",
                    "bekleidungsgeschäft",
                    "kaufhaus",
                    "einzelhandel",
                    "boutique",
                    "sportgeschäft",
                ],
                "transportation" => [
                    "tankstelle",
                    "fahrkarten",
                    "autowerkstatt",
                    "fahrschule",
                    "parkgebühren",
                    "öffentlicher nahverkehr",
                    "mautgebühren",
                    "taxi",
                    "autovermietung",
                    "flughafentransfer",
                    "bahn",
                    "bus",
                    "bahnreisen",
                    "fluglinie",
                    "reiseagentur",
                ],
                "living" => [
                    "miete",
                    "hypothek",
                    "stromrechnung",
                    "wasserrechnung",
                    "gasrechnung",
                    "müllabfuhrgebühren",
                    "hausmeisterdienste",
                    "gebäudeversicherung",
                    "wohnungsbaugenossenschaft",
                    "hausverwaltung",
                    "möbel",
                    "wohnungseinrichtung",
                    "immobilien",
                    "haus",
                    "gartenpflege",
                ],
                "travel" => [
                    "flugbuchung",
                    "hotelreservierung",
                    "reisebüro",
                    "bahntickets",
                    "campingplatz",
                    "mietwagen",
                    "ferienhausvermietung",
                    "rundreise",
                    "kreuzfahrt",
                    "wanderreise",
                    "urlaub",
                    "ferien",
                    "ausflug",
                    "reiseveranstalter",
                    "hotel",
                ],
                "health" => [
                    "arztpraxis",
                    "apotheke",
                    "krankenhaus",
                    "zahnarzt",
                    "augenarzt",
                    "physiotherapie",
                    "krankenversicherung",
                    "wellnesscenter",
                    "orthopädieschuhtechnik",
                    "hörgeräteakustiker",
                    "medikamente",
                    "gesundheitswesen",
                    "therapie",
                    "krankenkasse",
                    "gesundheitsclub",
                ],
                "education" => [
                    "nachhilfe",
                    "buchhandlung",
                    "schulbedarf",
                    "kursgebühren",
                    "universität",
                    "fahrschule",
                    "musikschule",
                    "sprachkurs",
                    "berufsschule",
                    "tanzschule",
                    "schule",
                    "bildungseinrichtung",
                    "weiterbildung",
                    "lernen",
                    "seminar",
                ],
                "entertainment" => [
                    "kino",
                    "konzerttickets",
                    "fitnessstudio",
                    "theater",
                    "freizeitpark",
                    "sportverein",
                    "veranstaltung",
                    "club",
                    "museum",
                    "zoo",
                    "spaß",
                ],
                "wage" => [
                    "lohn",
                    "gehalt",
                    "einkommen",
                    "verdienst",
                    "bezahlung",
                    "geld",
                    "vergütung",
                ],
            ];


            $words = explode(" ", $name);

            foreach ($words as $word) {
                foreach ($transactionCategories as $category => $names) {
                    if (in_array(strtolower($word), $names)) {
                        return $category;
                    }
                }
            }

            return "other";
        }


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

        $category == 'automatic' ? $category = getCategory($name) : '';

        if (isDate($date) && isValidMoneyAmount($amount) && isValidTransactionName($name)) {
            if ($transactionId == -1) {
                // Fügt die Transaktion in die Datenbank ein
                $insertTransaction = DB::connection('mysql')
                    ->table('transactions')
                    ->insert([
                        'name' => $name,
                        'date' => $date,
                        'amount' => $amount,
                        'userID' => $userId,
                        'category' => $category,
                    ]);
            } else {
                // Fügt die Transaktion in die Datenbank ein
                $updateTransaction = DB::connection('mysql')
                    ->table('transactions')
                    ->where('id', $transactionId)
                    ->update([
                        'name' => $name,
                        'date' => $date,
                        'amount' => $amount,
                        'userID' => $userId,
                        'category' => $category,
                    ]);
            }

            $balance = DB::connection('mysql')
                ->table('transactions')
                ->where('userID', $userId)
                ->select('amount')
                ->get();

            $newBalance = 0;

            foreach ($balance as $item) {
                $newBalance += (float)$item->amount;
            }

            // Aktualisiert das Guthaben des Benutzers
            $changeUserBalance = DB::connection('mysql')
                ->table('users')
                ->where('id', $userId)
                ->update(['balance' => $newBalance]);

            return $this->LoginRequest($request);
        } else {
            return view('login', [
                'error' => 'Ungültiges Datum, ungültiger Geldbetrag oder ungültige Länge!',
            ]);
        }
    }

    public function deleteRequest(Request $request)
    {
        $userId = $request->input('userId');
        $transactionIdsString = $request->input('transactions');

        $transactionIdsString = trim($transactionIdsString, '""');

        $transactionIds = json_decode('[' . $transactionIdsString . ']', true);

        foreach ($transactionIds[0] as $transactionId) {
            $deleteTransaction = DB::connection('mysql')
                ->table('transactions')
                ->where('id', $transactionId)
                ->delete();
        }

        $balance = DB::connection('mysql')
            ->table('transactions')
            ->where('userID', $userId)
            ->select('amount')
            ->get();

        $newBalance = 0;

        foreach ($balance as $item) {
            $newBalance += (float)$item->amount;
        }

        // Aktualisiert das Guthaben des Benutzers
        $changeUserBalance = DB::connection('mysql')
            ->table('users')
            ->where('id', $userId)
            ->update(['balance' => $newBalance]);

        return $this->LoginRequest($request);
    }
}
