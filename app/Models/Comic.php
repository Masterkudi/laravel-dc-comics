<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "comics";
    
// CASTS (inserisco qui i dati che devono essere trasformati, per esempio, da stringa ad array)

    protected $casts = [
        
    ];

// FILLABLE (indicano a Laravel che i campi indicati sono assegnabili tramite la funzione "fill()" o "update()" )

    protected $fillable = [

    ];

}
