<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Category;

class ProfileController extends Controller
{
    public function index (Request $request){

        $countries = [
            [
                "code" =>"AR",
                "name" => "Argentina"
            ],
            [
                "code" =>"AM",
                "name" => "Armenia"
            ],
            [
                "code" =>"AW",
                "name" => "Aruba"
            ],
            [
                "code" =>"AU",
                "name" => "Australia"
            ],
            [
                "code" =>"AT",
                "name" => "Austria"
            ],
            [
                "code" =>"AZ",
                "name" => "Azerbaijan"
            ],
            [
                "code" =>"BS",
                "name" => "Bahamas"
            ],
            [
                "code" =>"BH",
                "name" => "Bahrain"
            ],
            [
                "code" =>"BD",
                "name" => "Bangladesh"
            ],
            [
                "code" =>"BB",
                "name" => "Barbados"
            ],
            [
                "code" =>"BY",
                "name" => "Belarus"
            ],
            [
                "code" =>"BE",
                "name" => "Belgium"
            ],
            [
                "code" =>"BZ",
                "name" => "Belize"
            ],
            [
                "code" =>"BJ",
                "name" => "Benin"
            ],
            [
                "code" =>"BM",
                "name" => "Bermuda"
            ],
            [
                "code" =>"BT",
                "name" => "Bhutan"
            ],
            [
                "code" =>"BG",
                "name" => "Bulgaria"
            ],
            [
                "code" =>"BF",
                "name" => "Burkina"
            ],
            [
                "code" =>"BI",
                "name" => "Burundi"
            ],
            [
                "code" =>"KH",
                "name" => "Cambodia"
            ],
            [
                "code" =>"CM",
                "name" => "Cameroon"
            ],
            [
                "code" =>"CA",
                "name" => "Canada"
            ],
            [
                "code" =>"CV",
                "name" => "Cape"
            ],
            [
                "code" =>"KY",
                "name" => "Cayman"
            ],
            [
                "code" =>"CO",
                "name" => "Colombia"
            ],
            [
                "code" =>"KM",
                "name" => "Comoros"
            ],
            [
                "code" =>"CG",
                "name" => "Congo"
            ],
            [
                "code" =>"CK",
                "name" => "Cook"
            ],
            [
                "code" =>"CR",
                "name" => "Costa"
            ],
            [
                "code" =>"CI",
                "name" => "Côte"
            ],
            [
                "code" =>"HR",
                "name" => "Croatia"
            ],
            [
                "code" =>"CU",
                "name" => "Cuba"
            ],
            [
                "code" =>"CW",
                "name" => "Curaçao"
            ],
            [
                "code" =>"CY",
                "name" => "Cyprus"
            ],
            [
                "code" =>"CZ",
                "name" => "Czech"
            ],
            [
                "code" =>"DK",
                "name" => "Denmark"
            ],
            [
                "code" =>"DJ",
                "name" => "Djibouti"
            ],
            [
                "code" =>"DM",
                "name" => "Dominica"
            ],
            [
                "code" =>"DO",
                "name" => "Dominican"
            ],
            [
                "code" =>"EC",
                "name" => "Ecuador"
            ],
            [
                "code" =>"EG",
                "name" => "Egypt"
            ],
            [
                "code" =>"GP",
                "name" => "Guadeloupe"
            ],
            [
                "code" =>"GU",
                "name" => "Guam"
            ],
            [
                "code" =>"GT",
                "name" => "Guatemala"
            ],
            [
                "code" =>"GG",
                "name" => "Guernsey"
            ],
            [
                "code" =>"GN",
                "name" => "Guinea"
            ],
            [
                "code" =>"GW",
                "name" => "Guinea"
            ],
            [
                "code" =>"GY",
                "name" => "Guyana"
            ],
            [
                "code" =>"HT",
                "name" => "Haiti"
            ],
            [
                "code" =>"HN",
                "name" => "Honduras"
            ],
            [
                "code" =>"HK",
                "name" => "Hong"
            ],
            [
                "code" =>"HU",
                "name" => "Hungary"
            ],
            [
                "code" =>"IS",
                "name" => "Iceland"
            ],
            [
                "code" =>"IN",
                "name" => "India"
            ],
            [
                "code" =>"ID",
                "name" => "Indonesia"
            ],
            [
                "code" =>"NI",
                "name" => "Niger"
            ],
            [
                "code" =>"NG",
                "name" => "Nigeria"
            ],
            [
                "code" =>"NO",
                "name" => "Norway"
            ],
            [
                "code" =>"OM",
                "name" => "Oman"
            ],
            [
                "code" =>"PK",
                "name" => "Pakistan"
            ],
            [
                "code" =>"PW",
                "name" => "Palau"
            ],
            [
                "code" =>"PA",
                "name" => "Panama"
            ],
            [
                "code" =>"PG",
                "name" => "Papua"
            ],
            [
                "code" =>"PY",
                "name" => "Paraguay"
            ],
            [
                "code" =>"PE",
                "name" => "Peru"
            ],
            [
                "code" =>"PH",
                "name" => "Philippines"
            ],
            [
                "code" =>"PN",
                "name" => "Pitcairn"
            ],
            [
                "code" =>"PL",
                "name" => "Poland"
            ],
            [
                "code" =>"PT",
                "name" => "Portugal"
            ],
            [
                "code" =>"PR",
                "name" => "Puerto"
            ],
            [
                "code" =>"QA",
                "name" => "Qatar"
            ],
            [
                "code" =>"RE",
                "name" => "Réunion"
            ],
            [
                "code" =>"RO",
                "name" => "Romania"
            ],
            [
                "code" =>"RU",
                "name" => "Russian"
            ],
            [
                "code" =>"RW",
                "name" => "Rwanda"
            ],
            [
                "code" =>"SZ",
                "name" => "Swaziland"
            ],
            [
                "code" =>"SE",
                "name" => "Sweden"
            ],
            [
                "code" =>"CH",
                "name" => "Switzerland"
            ],
            [
                "code" =>"TR",
                "name" => "Turkey"
            ],
            [
                "code" =>"TM",
                "name" => "Turkmenistan"
            ],
            [
                "code" =>"TV",
                "name" => "Tuvalu"
            ],
            [
                "code" =>"UG",
                "name" => "Uganda"
            ],
            [
                "code" =>"UA",
                "name" => "Ukraine"
            ],
            [
                "code" =>"GB",
                "name" => "United"
            ],
            [
                "code" =>"US",
                "name" => "United"
            ],
            [
                "code" =>"UY",
                "name" => "Uruguay"
            ],
            [
                "code" =>"UZ",
                "name" => "Uzbekistan"
            ],
            [
                "code" =>"YE",
                "name" => "Yemen"
            ],
            [
                "code" =>"ZM",
                "name" => "Zambia"
            ],
            [
                "code" =>"ZW",
                "name" => "Zimbabwe"
            ],
        ];

        $categories = Category::all();
        return view('pages.profile', [
            'categories' => $categories,
            'countries' => $countries
        ]);
    }

    public function store (Request $request){

        switch (auth()->user()->accountType) {
            case 'applicant':

                if($request->submit == "account"){
                    $request->validate([
                        'submit' => 'required',
                        'firstname' => 'required',
                        'lastname' => 'required',
                        'email' => 'required',
                        'account_type' => 'required',
                    ]);

                    $imageName = "";

                    if($request->image){
                        $imageName = time() . "-" . $request->firstname . '.'  . $request->image->extension();
                        $request->image->move(public_path('applicants/image'), $imageName);
                    }

                    auth()->user()->person()->update([
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'image' => $imageName
                    ]);

                    auth()->user()->update([
                        'email' => $request->email,
                        'accountType' => $request->account_type
                    ]);

                    return redirect()->back();
                    
                }
                
                if($request->submit == "profile"){
                    $attachments = collect($request->attachments);

                    $request->validate([
                        'category' => 'required',
                        'country' => 'required',
                        'attachments' => 'required',
                        'title' => 'required',
                        'bio' => 'required'
                    ]);

                    if(auth()->user()->accountType == 'applicant') {
                        dd($request);
                        
                        $fileName = time() . "-" . auth()->user()->person->firstname . '.'  . $request->attachment->extension();
                        $request->attachment->move(public_path('applicants/attachment'), $fileName);

                        auth()->user()->person()->update([
                            'category' => $request->category,
                            'country' => $request->country,
                            'title' => $request->title,
                            'bio' => $request->bio
                        ]);

                        auth()->user()->attachment()->create([
                            "attachment" => $fileName
                        ]);

                        return redirect()->back()->with('alert', ['type' => "success", 'message' => 'Change saved']);
                    }




                }
                break;

            case 'company':
                if($request->submit == "account"){
                    $request->validate([
                        'submit' => 'required',
                        'name' => 'required',
                        'title' => 'required',
                        'email' => 'required',
                        'account_type' => 'required',
                    ]);

                    $imageName = "";
                    
                    if($request->logo){
                        $imageName = time() . "-" . $request->name . '.'  . $request->logo->extension();
                        $request->logo->move(public_path('company/image'), $imageName);
                    }

                    auth()->user()->person()->update([
                        'name' => $request->name,
                        'title' => $request->title,
                        'logo' => $imageName
                    ]);

                    auth()->user()->update([
                        'email' => $request->email,
                        'accountType' => $request->account_type
                    ]);

                    return redirect()->back()->with('alert', ['type' => "success", 'message' => 'Change saved']);
                    
                }

                if($request->submit == "profile"){
                    $request->validate([
                        'submit' => 'required',
                        'latitude' => 'required',
                        'longitude' => 'required',
                        'category' => 'required',
                        'country' => 'required',
                        'bio' => 'required',
                    ]);

                    auth()->user()->person()->update([
                        'bio' => $request->bio,
                        'latitude' => $request->latitude,
                        'longitude' => $request->longitude,
                        'category' => $request->category,
                        'country' => $request->country,
                    ]);

                    return redirect()->back()->with('message', 'Change saved');

                }
                break;
            
            default:
                break;
        }







    }

}
