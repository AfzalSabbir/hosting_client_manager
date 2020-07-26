<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $fillable = ['domain_id', 'db_name', 'username', 'password', 'status'];
}
