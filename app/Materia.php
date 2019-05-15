<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table='materia';
    protected $fillable=['nombre'];

    public function docentes(){
      return $this->belongsToMany('App\Docente','materia_docente','materia_id',
        'docente_id')->withTimestamps();
      /*..belongsToMany([modelo],[nombre_tabla_pivote], [nombre_fk1],
        [nombre_fk2]);*/
    }
}
