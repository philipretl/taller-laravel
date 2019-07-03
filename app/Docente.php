<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table='docente';
    protected $fillable=['nombre', 'tipo', 'institucion_id'];

    public function institucion(){
      return $this->belongsTo('App\Institucion','institucion_id', 'id');
      // ...belonsgTo([nombre_modelo], [FK_modelo], [Pk_de_este_modelo],)
    }

    public function materias (){
      return $this->belongsToMany('App\Materia','materia_docente','materia_id',
        'docente_id');
      //...belongsToMany([modelo],[nombre_tabla_pivote], [nombre_fk1], [nombre_fk2]);
    }
}
