<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donante;

use App\Proceso;

class DonanteController extends Controller
{

    
    public function index(Request $request){

    	if($request->has('query'))
		{
			$query = str_replace("@", " +", $request->input('query'));

            // dd($query);

			$donantes = Donante::with('obra')->whereRaw("MATCH(nombre) AGAINST(? IN BOOLEAN MODE)", array($query))->get();

		}else{
			$donantes = Donante::with('obra')->get();

		}

        // dd($donantes);
		

		return view('backend.donante', compact('donantes'));
    }

    public function create(){
    	return view('backend.donante-create');
    }

    public function store(Request $request){

    	$donante = new Donante;

    	$donante->nombre = $request->input('nombre');
    	$donante->email = $request->input('email');
    	$donante->telefono = $request->input('telefono');
    	$donante->status = $request->input('status');
    	$donante->fecha_donacion = $request->input('fecha_donacion');
    	$donante->observaciones = $request->input('observaciones');
    	
    	$donante->save();

    	return redirect('donante');
    }

    public function show($id){
        $donante = Donante::with('obra')->find($id);

        return view('backend.donante-show', compact('donante'));

    }

    public function edit($id){

    	$donante = Donante::find($id);

    	return view('backend.donante-edit', compact('donante'));
    }

    public function update(Request $request, $id){

    	$donante = Donante::find($id);

    	$donante->nombre = $request->input('nombre');
    	$donante->email = $request->input('email');
    	$donante->telefono = $request->input('telefono');
    	$donante->status = $request->input('status');
    	$donante->fecha_donacion = $request->input('fecha_donacion');
    	$donante->observaciones = $request->input('observaciones');
    	
    	$donante->save();

    	return redirect('donante');

    }

    public function sortear(Request $request){


        if($request->has('ids')){
            $ids = $request->input('ids');   
            $proceso = new Proceso;
            $proceso->sortear($ids); 

            return redirect('donante')->with('success', 'X Solicitantes sorteados');

        }else{

            return redirect('donante')->with('warning', 'Seleccione Donantes para ser sorteados');

        }


 


    }
}
