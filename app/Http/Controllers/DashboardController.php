<?php

namespace App\Http\Controllers;

use App\accounts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $accounts = accounts::all();
        return view('accounts.index', compact(['accounts']));
    }

    public function store(Request $request) {
        accounts::create($request->except('_token', 'submit'));
        return redirect('/dashboard');
    }
}
