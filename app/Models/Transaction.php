<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
       'transaction_id',
        'sender',
        'receiver',
        'nfts_id',
        'amount',
        'created_at',
        'updated_at',
    ];
}
