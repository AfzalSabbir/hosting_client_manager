<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralIncome extends Model
{
    protected $fillable = [
        'source_id', 'date', 'amount', 'status'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function source()
    {
        return $this->belongsTo(Source::class);
    }
}
