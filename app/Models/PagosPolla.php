<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagosPolla extends Model
{
    use HasFactory;

    public function polla()
    {
        return $this->belongsTo(Polla::class);
    }
}
