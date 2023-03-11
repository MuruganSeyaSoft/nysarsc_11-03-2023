<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membercheckout extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname','phone','email', 'billingname','comments','driving','mem_id','transaction_id','source_email','payment_id','parent_id','street_address'
        ,'city','state','zipcode','country','page_type'];

          public function member()
            {
              return $this->belongsTo('App\Models\Members', 'mem_id', 'id');
            }

            public function payment()
            {
              return $this->belongsTo('App\Models\PaymentLogs', 'payment_id', 'id');
            }


}

