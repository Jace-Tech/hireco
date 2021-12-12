<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Applicant;
use App\Models\Company;
use App\Models\Message;
use App\Models\Bookmark;
use App\Models\Attachments;
use App\Models\Skill;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    public function person () {
        if(auth()->check()){
            $accountType = auth()->user()->accountType;

            if($accountType == "applicant"){
                return $this->hasOne(Applicant::class);
            }
        }
    }

    public function skill () {
        return $this->hasMany(Skill::class);
    }

    public function message () {
        return $this->hasMany(Message::class);
    }

    public function attachment () {
        return $this->hasOne(Attachments::class);
    }

    public function bookmark() {
        return $this->hasMany(Bookmark::class);
    }

    protected $fillable = [
        'accountType',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
