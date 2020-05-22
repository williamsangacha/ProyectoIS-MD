<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaModel extends Model
{
    protected $primaryKey = 'rescodigo'; // Clave primaria
    protected $table ='reserva';
    public $timestamps = false;
    protected $fillable = ['rescodigo', 'visid', 'resfecha','reshora','areacodigo'];
}
