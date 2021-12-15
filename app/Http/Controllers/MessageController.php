<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        return view('pages.message');
    }
    
    public function delete(Request $request)
    {
        # code...
    }

    public function update(Request $request)
    {
        # code...
    }

    public function store(Request $request)
    {
        # code...
    }
}
