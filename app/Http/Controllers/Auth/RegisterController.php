<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Str;
use Hash;
use App\Models\User;
use App\Models\Applicant;
use App\Models\Company;

class RegisterController extends Controller
{

    public function generateID(int $length, string $prefix)
    {
        $id = $prefix . "-";

        for($i = 1; $i <= $length; $i++){
            $id .= rand(0, 9);
        }

        return $id;
    }

    public function index()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            "account_type" => ['required'],
            "email" => ['required', 'email'],
            "password" => ['required', 'confirmed']
        ]);

        if($request->account_type == "applicant"):
            $user = User::create([
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
                'accountType' => $request->account_type
            ]);

            Applicant::create([
                'applicantId' => $this->generateID(10, "APL"),
                'user_id' => $user->id,
            ]);

            return redirect()->route('login');
        endif;

        if($request->account_type == "company"):
            $user = User::create([
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
                'accountType' => $request->account_type
            ]);

            Company::create([
                'companyId' => $this->generateID(10, "CPN"),
                'user_id' => $user->id,
            ]);

            return redirect()->route('login');
        endif;

    }
}
