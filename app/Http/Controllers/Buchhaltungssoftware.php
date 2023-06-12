<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Buchhaltungssoftware extends Controller
{
    public function vue()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function getTransactions($userId)
    {
        $transactions = DB::connection('mysql')
            ->table('transactions')
            ->select('name', 'date', 'amount', 'id', 'category')
            ->where('userID', $userId)
            ->get();

        return $transactions;
    }
}
