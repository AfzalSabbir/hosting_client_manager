<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RenewalDomain extends Model
{
    protected $fillable = ['client_id', 'expiration_at', 'renewal', 'renewal_amount', 'status'];

    protected $dates = ['created_at', 'updated_at', 'expiration_at'];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
