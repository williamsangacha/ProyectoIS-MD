<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreasModel extends Model
{
    protected $primaryKey = 'areacodigo'; // Clave primaria
    protected $table ='arearecreativa';
    public $timestamps = false;
    protected $fillable = ['areacodigo', 'encid', 'areanombre','areadesc','areaaforo'];

}
