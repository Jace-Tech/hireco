<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicantId',
        'user_id',
        'firstname',
        'lastname',
        'bio',
        'title',
        'image'
    ];
}
