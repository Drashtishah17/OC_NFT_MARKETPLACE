<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NFT extends Model
{
    use HasFactory;
    protected $table = 'nfts';
    
    protected $fillable = [
        'nft_id',
        'nft_name',
        'nft_description',
        'nft_price',
        'nft_image_linl',
        'category',
        'User_id',
        'created_at',
        'updated_at',
    ];
}
