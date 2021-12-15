<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;
use App\Models\Company;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'category_id',
        'type',
        'min',
        'max',
        'status',
        'endDate',
        'longitude',
        'latitude',
        'location',
        'description',
    ];

    protected $attribute = [
        'status' => 'pending',
    ];

    public function applicant ($id) {
        return Candidate::where('job_id', $id)->get();
    }

    public function company ($id) {
        return Company::where('user_id', $id)->first();
    }

    public function readableFigure($amount){
        $amountArr = explode(',', number_format($amount));
        $readableAmount;

        switch (count($amountArr)) {
            case 3:
                $readableAmount = $amountArr[0] . "m";
                break;

            case 2:
                $readableAmount = $amountArr[0] . "k";
                break;
            
            default:
                $readableAmount = $amountArr[0];
            break;
        }

        return $readableAmount;
    }
    
}
