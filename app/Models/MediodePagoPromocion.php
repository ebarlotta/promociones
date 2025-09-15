<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediodePagoPromocion extends Model
{
    /** @use HasFactory<\Database\Factories\MediodePagoPromocionFactory> */
    use HasFactory;

    protected $fillable=[
        'medio_id',
        'promocion_id',
    ];
}
