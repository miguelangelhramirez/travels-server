<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'viajes';

    protected $fillable = [
        'pais',
        'ciudad',
        'presupuesto',
        'fecha'
    ];
}
