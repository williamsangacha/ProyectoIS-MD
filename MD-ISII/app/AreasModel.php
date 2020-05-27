<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreasModel extends Model
{
    protected $primaryKey = 'areacodigo'; // Clave primaria
    public $incrementing = false;
    protected $table ='arearecreativa';
    public $timestamps = false;
    protected $fillable = ['areacodigo', 'encid', 'areanombre','areadesc','areaaforo'];

}
