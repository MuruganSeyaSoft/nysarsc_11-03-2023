<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couponcode extends Model
{
    use HasFactory;
    protected $fillable = ['couponcode','start_date','end_date','status','discount','discount_type'];
}
