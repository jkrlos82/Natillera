<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    public function socio()
    {
        return $this->belongsTo(Socio::class);
    }

    public function pagosPrestamos()
    {
        return $this->hasMany(PagosPrestamos::class);
    }
}
