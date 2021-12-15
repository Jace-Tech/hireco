<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'icon'
    ];

    public function jobs($id)
    {
        return Job::where('category_id', $id)->get();
    }
}
