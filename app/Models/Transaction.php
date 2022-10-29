<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sisa_id',
        'blood',
        'total',
        'request_date',
        'out_date',
        'status',
        'medis',
        'user_id_approve',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sisa()
    {
        return $this->belongsTo(Sisa::class, 'sisa_id', 'id');
    }

    public function user_approve()
    {
        return $this->belongsTo(User::class, 'user_id_approve', 'id');
    }
}
