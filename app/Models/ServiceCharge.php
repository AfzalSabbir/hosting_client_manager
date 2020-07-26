<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCharge extends Model
{
    protected $fillable = ['client_id', 'expiration_at', 'service', 'service_charge', 'status'];

    protected $dates = ['created_at', 'updated_at', 'expiration_at'];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
