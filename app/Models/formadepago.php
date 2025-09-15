<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formadepago extends Model
{
    /** @use HasFactory<\Database\Factories\FormadepagoFactory> */
    use HasFactory;

    protected $fillable=[
        'NombreForma',
    ];
}
