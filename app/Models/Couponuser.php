<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couponuser extends Model
{
    use HasFactory;
    protected $fillable = ['couponcode_id','mem_id','used'];

    public function member()
    {
      return $this->belongsTo('App\Models\Members', 'mem_id', 'id');
    }
    public function coupon()
    {
      return $this->belongsTo('App\Models\Couponcode', 'couponcode_id', 'couponcode');
    }

    
}
