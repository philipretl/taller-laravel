<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table='institucion';
    protected $fillable=['nombre', 'codigo'];

    public function docentes(){
      return $this->hasMany('App\Docente','institucion_id', 'id');
        // ...hasMany([nombre_modelo], [FK_modelo], [Pk_de_este_modelo],)
    }

    public function rector(){
      return $this->hasOne('App\Rector','institucion_id', 'id');
        // ...hasOne([nombre_modelo], [FK_modelo], [Pk_de_este_modelo],)
    }
    
}
