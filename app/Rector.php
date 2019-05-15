<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rector extends Model
{
    protected $table='rector';
    protected $fillable=['nombre', 'institucion_id'];

    public function institucion(){
      return $this->belongsTo('App\Institucion','institucion_id','id');
    }
}
