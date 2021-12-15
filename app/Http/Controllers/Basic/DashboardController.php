<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        switch( auth()->user()->accountType){
            case 'applicant':
                $firstname = auth()->user()->person->firstname;
                if(!$firstname) return redirect()->route('profile');
                break;

            default:
                $name = auth()->user()->person->name;
                if(!$name) return redirect()->route('profile');
                break;
        }
        
        
        return view('pages.dashboard');
    }
}
