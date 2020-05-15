<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;

class ObraController extends Controller
{

	public function index(Request $request){


		if($request->has('query'))
		{
			if(is_numeric($request->input('query'))){
				$obras = Obra::with('donante')->where('numero', $request->input('query'))->paginate(100);
			}else{
				$obras = Obra::with('donante')->whereRaw("MATCH(artista,titulo) AGAINST(? IN BOOLEAN MODE)", array($request->input('query')))->paginate(100);
			}
			

		}else{
			$obras = Obra::with('donante')->paginate(100);

		}
		

		return view('backend.obra', compact('obras'));
	}
    
    public function create(){
    	return view('backend.obra-create');
    }

    public function edit($id){
    	$obra = Obra::find($id);

    	return view('backend.obra-edit', compact('obra'));
    }

    public function update(Request $request, $id){

    	$obra = Obra::find($id);

    	$obra->artista = $request->input('artista');
    	$obra->titulo = $request->input('titulo');
    	$obra->tecnica = $request->input('tecnica');
    	$obra->en_tecnica = $request->input('en_tecnica');
    	$obra->dimensiones = $request->input('dimensiones');
    	$obra->numero = $request->input('numero');
    	$obra->ano = $request->input('ano');
    	$obra->status = $request->input('status');

    	$obra->save();

    	
    	if($request->hasFile('image'))
    	{
			$obraId = $obra->id;
			/** GUARDAR IMAGEN **/

			// $file = Input::file('image');
			$file = $request->file('image');

			//Creamos una instancia de la libreria instalada   
			$image = \Image::make($file);

			//Ruta donde queremos guardar las imagenes
			$path = public_path().'/thumbnails/';

			$nameFile = $obraId.$file->getClientOriginalName();

			// Guardar Original
			$image->save($path.$nameFile);
			// Cambiar de tamaño

			$image->fit(300);

			// Guardar
		   	$image->save($path.'thumb_'.$nameFile);

		   	$image->fit(100);

		   	$image->save($path.'thumb2_'.$nameFile);

		
			$obra->imagen = $nameFile;

			$obra->save();
    	}

    	return redirect('obra');

    }

    public function store(Request $request){


    	$validatedData = $request->validate([
	        'artista' => 'required',
	        'titulo' => 'required',
	        'numero' => 'unique:obras|integer',
	        'ano' => 'integer'
	    ]);

    	$obra = new Obra;

    	$obra->artista = $request->input('artista');
    	$obra->titulo = $request->input('titulo');
    	$obra->tecnica = $request->input('tecnica');
    	$obra->en_tecnica = $request->input('en_tecnica');
    	$obra->dimensiones = $request->input('dimensiones');
    	$obra->numero = $request->input('numero');
    	$obra->ano = $request->input('ano');
    	$obra->status = $request->input('status');

    	$obra->save();

    	
    	if($request->hasFile('image'))
    	{
			$obraId = $obra->id;
			/** GUARDAR IMAGEN **/

			// $file = Input::file('image');
			$file = $request->file('image');

			//Creamos una instancia de la libreria instalada   
			$image = \Image::make($file);

			//Ruta donde queremos guardar las imagenes
			$path = public_path().'/thumbnails/';

			$nameFile = $obraId.$file->getClientOriginalName();

			// Guardar Original
			$image->save($path.$nameFile);
			// Cambiar de tamaño

			$image->fit(300);

			// Guardar
		   	$image->save($path.'thumb_'.$nameFile);

		   	$image->fit(100);

		   	$image->save($path.'thumb2_'.$nameFile);

		
			$obra->imagen = $nameFile;

			$obra->save();
    	}

    	return redirect('obra');

    }
}
