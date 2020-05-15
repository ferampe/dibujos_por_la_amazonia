<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thumbnail;

class ThumbnailController extends Controller
{

	public function index()
 	{
        $thumbnails = Thumbnail::all();
        return view('thumb', compact('thumbnails'));
 	}

    public function create(){

    	 return view('form-imagen');
    }

    public function store(Request $request){


	   // $file = Input::file('image');
    	$file = $request->file('image');

	   //Creamos una instancia de la libreria instalada   
	   $image = \Image::make($request->file('image'));

	   //Ruta donde queremos guardar las imagenes
	   $path = public_path().'/thumbnails/';

	   // Guardar Original
	   $image->save($path.$file->getClientOriginalName());
	   // Cambiar de tamaño

	   $image->fit(300);

	   // $image->resize(240,200);
	   // Guardar
	   $image->save($path.'thumb_'.$file->getClientOriginalName());
	   
	   //Guardamos nombre y nombreOriginal en la BD
	   $thumbnail = new Thumbnail();
	   // $thumbnail->name = Input::get('name');
	   $thumbnail->name = $request->input('name');
	   $thumbnail->image = $file->getClientOriginalName();
	   $thumbnail->save();
	   
	   return redirect()->route('thumbnail.index');
	}
}
