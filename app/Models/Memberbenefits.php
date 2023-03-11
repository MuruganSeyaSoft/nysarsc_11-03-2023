<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberbenefits extends Model
{
    use HasFactory;
    protected $fillable = ['data','status'];
}
