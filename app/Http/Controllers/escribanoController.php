<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escribano;
class escribanoController extends Controller
{
    public function getEscribano(){
        return response()->json(Escribano::all(),200);
    }

    public function getEscribanoId($id){

        $escribano = Escribano::find($id);

        if(is_null($escribano)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }

        return response()->json($escribano::find($id),200);
    }

    public function insertEscribano(Request $request){
        
        $escribano = Escribano::create($request->all());
        return response($escribano,200);
    }

    public function updateEscribano(Request $request, $id){

        $escribano = Escribano::find($id);
        if(is_null($escribano)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }

        $escribano->update($request->all());

        return response($escribano,200);
    }

    public function deleteEscribano($id){

        $escribano = Escribano::find($id);
        if(is_null($escribano)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }

        $escribano->delete();

        return response()->json(['mensaje'=>'registro eliminado'],200);
    }
}
