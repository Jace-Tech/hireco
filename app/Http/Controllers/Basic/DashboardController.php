<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $firstname = auth()->user()->person->firstname;
        if(!$firstname) return view('pages.dashboard');
        
        return view('pages.dashboard');
    }
}
