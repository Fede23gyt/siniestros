<?php

namespace App\Http\Controllers;

use App\Agencia;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{

  public function index()
    {
        //
      $datos = Agencia::all();
      return $datos;

    }

  public function grabar(Request $request)
    {
     $agencia = new Agencia();
     $agencia->nombre = $request->nombre;
     $agencia->estado = $request->estado;

     $agencia->save();

    }

  public function mostrar($id)
    {
      //Esta función devolverá los datos del id recibido y lo guarda en $agencia
      $agencia = Agencia::find($request->id);
      return $agencia;

    }

  public function actualizar(Request $request, $id)
    {
      $agencia = Task::findOrFail($request->id);

      $agencia->nombre = $request->nombre;
      $agencia->estado = $request->estado;

      $agencia->save();

      return $agencia;
    }

  public function eliminar($id)
    {
      $agencia = Task::destroy($request->id);
        return $agencia;
    }

}
