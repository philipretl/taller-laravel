<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institucion;
use App\Docente;

class DocenteController extends Controller
{
    public function index (){

    }

    public function create(Request $request){
      $instituciones= Institucion::orderBy('id','ASC')->get()->all();
      //dd($instituciones);
      return view('crearDocente')->with('instituciones',$instituciones);
    }

    public function store(Request $request){
      //dd($request);
      $docente = new Docente($request->all());
      $institucion = Institucion::find($request->institucion_id);

      if ($institucion!=null) {
        $docente->institucion()->associate($institucion);
        $docente->save();

      }
      flash('Se agrego el docente: '.$docente->nombre.' correctamente' )->warning();
      return redirect()->route('index');
    }
}
