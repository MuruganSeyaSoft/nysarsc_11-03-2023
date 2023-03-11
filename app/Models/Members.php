<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','email','username','password','member_status','street_address'
        ,'city','state','zipcode','country'];

      
        // public function membercheckout()
        // {
        //     return $this->belongsTo('App\Models\Membercheckout', 'mem_id', 'id');
        // }

}
