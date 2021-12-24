<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polla extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function socio()
    {
        return $this->belongsTo(Socio::class);
    }

    public function pagosPolla()
    {
        return $this->hasMany(PagosPolla::class);
    }
}
