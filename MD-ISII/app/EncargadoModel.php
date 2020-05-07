<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncargadoModel extends Model
{
<<<<<<< HEAD
    protected $primaryKey = 'encid'; // Clave primaria
=======
    protected $primaryKey = 'engid'; // Clave primaria
>>>>>>> fbd98f5d795074b86080ccd71302db9e3f45540e
    protected $table ='encargado';
    public $timestamps = false;
    protected $fillable = ['encid', 'encnombre', 'encapellido','encedad','encsexo','encsueldo'];
}
