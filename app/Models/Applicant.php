<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Applicant extends Model
{
    use HasFactory;

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'applicantId',
        'user_id',
        'firstname',
        'lastname',
        'country',
        'price_per_hour',
        'bio',
        'title',
        'category',
        'image'
    ];
}
