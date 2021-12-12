<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant as ApplicantModel;
use Illuminate\Support\Collection;

class ApplicantController extends Controller
{
    public function getApplicant($id)
    {
        
        $countries = collect([
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
        ]);

        $applicant = ApplicantModel::where('applicantId', $id)->first();
        $country = $countries->firstWhere('code', "NG");
    
        return view('pages.applicant', [
            'applicant' => $applicant,
            'country' => $country
        ]);
    }

    public function bookmark($id)
    {
        auth()->user()->bookmark()->create([
            'user' => $id
        ]);


        return back()->with("message", "bookmarked");
    }

    public function removeBookmark($id)
    {
        auth()->user()->bookmark()->destroy([
            'user' => $id
        ]);


        return back();
    }
}
