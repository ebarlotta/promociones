<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPromocion extends Model
{
    /** @use HasFactory<\Database\Factories\FormaPromocionFactory> */
    use HasFactory;

    protected $fillable=[
        'forma_id',
        'promocion_id',
    ];
}
