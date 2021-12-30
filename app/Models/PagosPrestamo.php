<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagosPrestamo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Pagosprestamo()
    {
        return $this->belongsTo(Prestamo::class);
    }
}
