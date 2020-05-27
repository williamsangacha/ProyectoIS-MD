<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncargadoModel extends Model
{
    protected $primaryKey = 'encid'; // Clave primaria
    public $incrementing = false;
    protected $table ='encargado';
    public $timestamps = false;
    protected $fillable = ['encid', 'encnombre', 'encapellido','encedad','encsexo','encsueldo'];
}
