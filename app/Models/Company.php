<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'companyId',
        'category',
        'bio',
        'logo',
        'title',
        'name',
        'country',
        'longitude',
        'latitude',
    ];
}
