<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['client_id', 'payment_at', 'payment', 'due', 'status'];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
}
