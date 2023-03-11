<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagedetails extends Model
{
    use HasFactory;
    protected $fillable = ['annual_title_id','data','page_type','status'];
}
