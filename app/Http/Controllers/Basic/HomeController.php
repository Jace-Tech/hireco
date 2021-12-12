<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Applicant;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $applicants = Applicant::all();
        return view('pages.index', [
            "categories" => $categories,
            "applicants" => $applicants, 
        ]);
    }
}
