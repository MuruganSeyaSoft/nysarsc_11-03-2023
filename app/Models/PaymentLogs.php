<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentLogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount','response_code','transaction_id', 'auth_id','quantity','message_code','name_on_card','mem_id','coupon_code','discount_amount','discount_type',
        'payment_mode','approved_status','cheque_document'
    ];

    public function member()
    {
      return $this->belongsTo('App\Models\Members', 'mem_id', 'id');
    }

    public function membercout()
    {
      return $this->belongsTo('App\Models\Membercheckout', 'mem_id', 'id');
    }
}
