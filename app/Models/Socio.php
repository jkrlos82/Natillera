<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pagoPrestamo()
    {
        return $this->hasMany(PagosPrestamo::class);
    }

    public function polla()
    {
        return $this->hasOne(Polla::class);
    }
}
