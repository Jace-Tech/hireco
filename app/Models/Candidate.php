<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Attachments;
use App\Models\User;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'user_id',
        'status'
    ];

    public function jobSingle($id)
    {
        return Job::where('id', $id)->first();
    }

    public function user($id)
    {
        return Applicant::where('user_id', $id)->first();
    }

    public function person($id)
    {
        return User::where('id', $id)->first();
    }

    public function attachment($id)
    {
        return Attachments::where('user_id', $id)->first();
    }
}
