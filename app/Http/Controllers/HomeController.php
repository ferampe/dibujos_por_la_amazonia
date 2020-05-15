<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\Donante;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $obras = Obra::where('status', 'disponible')->orWhere('status', 'asignado')->get();

        return view('frontend.home', compact('obras'));
    }

    public function obra($numero){

        $obra = Obra::where('numero', $numero)->first();

        return view('frontend.obra', compact('obra'));
    }

    public function pagar(Request $request){

        $donante = new Donante;
        $donante->nombre = $request->nombre;
        $donante->email = $request->email;
        $donante->telefono = $request->telefono;

        $donante->save();

        return \Redirect::away('https://www.mercadopago.com.pe/checkout/v1/redirect?pref_id=568294273-f92c49dc-c485-45bb-a870-47ef40e0cc07');


    }
}
