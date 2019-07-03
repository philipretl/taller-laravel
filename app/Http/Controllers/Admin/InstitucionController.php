<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institucion;

class InstitucionController extends Controller
{
    //

    public function index(Request $request){
      $instituciones=Institucion::orderBy('id','ASC')->get();
      //dd($instituciones);
      return view('listarInstitucion')->with('instituciones',$instituciones);
    }

    public function store (Request $request){
      $institucion = new Institucion($request->all());
      /*$institucion = new Institucion();
      $institucion->nombre=$request->nombre;
      $institucion->codigo=$request->codigo;
      */
      $institucion->save();

      $mens = 'se guardo correctamente la institucion';
      $a = 'Esta es la segunda variable';

      return view('crearInstitucion')
      ->with('mensaje',$mens)
      ->with('a', $a); // este sirve para retornar a una vista

      //return redirect()->route('createInstitution'); // retornase a una ruta

    }

    public function edit(Request $request){
      //dd('voy a editar', $request->id);

      $institucion = Institucion::find($request->id);

      //dd($institucion);
      return view('editarInstitucion')->with('ins',$institucion);
    }

    public function update(Request $request){
      $institucion = Institucion::find($request->id);
      //dd($institucion);
      $institucion->fill($request->all());
      $institucion->save();
      return redirect()->route('listarInstituciones');
    }

    public function delete(Request $request){
      //dd($request);
      $institucion = Institucion::find($request->id);
      if($institucion!=null){
        $institucion->delete();
      }else{
        dd('no se pudo eliminar');
      }
      return redirect()->route('listarInstituciones');

    }

}
