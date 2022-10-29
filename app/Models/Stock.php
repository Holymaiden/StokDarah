<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'pouch_number',
        'donor',
        'blood',
        'total',
        'date_of_entry',
    ];

    public function transaction()
    {
        return $this->hasMany('App\Models\Transaction');
    }
}
