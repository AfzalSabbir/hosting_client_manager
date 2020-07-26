<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceChargeHistory extends Model
{
    protected $fillable = ['client_id', 'service_id', 'service', 'service_charge', 'expiration_at', 'status'];

    protected $dates = ['created_at', 'updated_at', 'expiration_at'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
