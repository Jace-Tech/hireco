<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Str;
use App\Models\User;
use App\Models\Applicant;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function generateID(int $length, string $prefix){
        $id = $prefix . "-";

        for($i = 1; $i <= $length; $i++){
            $id .= rand(0, 9);
        }

        return $id;
    }

    public function login(Request $request)
    {
        $credientials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        auth()->attempt($credientials);
        return redirect()->intended('dashboard');
    }


    public function linkedin(Request $request)
    {
        session(['accountType' => $request->type]);
        return Socialite::driver('linkedin')->stateless()->redirect();
    }

    public function linkedinRedirect()
    {
        $accountType = session('accountType');
        $response = Socialite::driver('linkedin')->stateless()->user();

        if($accountType == 'applicant' || $accountType == 'freelancer' ):
            $user = User::findOrCreate(['email' => $response->email], [
                'accountType' => $accountType,
                'password' => Str::random(60)
            ]);

            Applicant::create([
                'firstname' => $response->first_name,
                'lastname' => $response->last_name,
                'image' => $response->avater,
                'applicantId' => $this->generateID(10, "APL"),
                'user_id' => $user->id,
            ]);

            auth()->login($user, true);

            return redirect()->route('dashboard');
        endif;

        if($accountType == 'company'):
            $user = User::findOrCreate(['email' => $response->email], [
                'accountType' => $accountType,
                'password' => Str::random(25)
            ]);

            Applicant::create([
                'firstname' => $response->firstname,
                'lastname' => $response->lastname,
                'applicantId' => $this->generateID(10, "APL"),
                'user_id' => $user->id,
            ]);

            auth()->login($user, true);

            return redirect()->route('dashboard');
        endif;
    }
}
