<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	'name', 'contact_person', 'mobile', 'email', 'address', 'domain', 'hosting', 'district_id', 'upazila_id', 'project_price', 'is_paid', 'renewal_price', 'service_charge', 'expiration_date', 'service_expiration_date', 'status'
    ];

    protected $dates = ['created_at', 'updated_at', 'expiration_date', 'service_expiration_date'];
    
    public function district()
    {
    	return $this->belongsTo(District::class);
    }

    public function upazila()
    {
    	return $this->belongsTo(Upazila::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

}
