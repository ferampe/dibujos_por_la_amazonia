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
        $obras = Obra::where('status', 'disponible')->orWhere('status', 'asignado')->inRandomOrder()->get();
        $lang = null;
        
        return view('frontend.home', compact('obras', 'lang'));
  
        
    }

    public function indexen()
    {
        $obras = Obra::where('status', 'disponible')->orWhere('status', 'asignado')->inRandomOrder()->get();

        $lang = 'en';
        return view('frontend.home-en', compact('obras', 'lang'));
        
        
    }

    public function info($lang = null){

        if($lang && $lang == 'en'){
            return view('frontend.info-en', compact('lang'));    
        }else{
            return view('frontend.info', compact('lang'));
        }
        
    }

    public function obra(Request $request, $lang = null){

        // dd($numero);

        $obra = Obra::where('numero', $request->input('numero'))->first();

        return view('frontend.obra', compact('obra', 'lang'));
    }

    

    public function donar($lang = null){

        if($lang && $lang == 'en'){
            return view('frontend.formulario-pago-en', compact('lang')); 
        }else{
            return view('frontend.formulario-pago', compact('lang'));
        }

        
    }

}
