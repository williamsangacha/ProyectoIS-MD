<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitanteModel extends Model
{
    protected $primaryKey = 'visid'; // Clave primaria
    protected $table ='visitante';
    public $timestamps = false;
    protected $fillable = ['visid', 'visnombre', 'visapellido','visedad','vissexo'];
}
