<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = ['domain_name', 'd_username','d_password', 'status'];

    public function db()
    {
    	return $this->hasMany(Database::class , 'domain_id', 'id')->where('status', 1);
    }
}
