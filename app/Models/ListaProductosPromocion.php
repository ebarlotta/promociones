<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaProductosPromocion extends Model
{
    /** @use HasFactory<\Database\Factories\ListaProductosPromocionFactory> */
    use HasFactory;

    protected $fillable=[
        'producto_id',
        'promocion_id',
    ];
}
