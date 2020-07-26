<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RenewalHistory extends Model
{
    protected $fillable = ['client_id', 'renewal_id', 'renewal', 'renewal_amount', 'expiration_at', 'status'];

    protected $dates = ['created_at', 'updated_at', 'expiration_at'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
