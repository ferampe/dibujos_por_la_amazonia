<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\Donante;

class DashboardController extends Controller
{
    

    public function index(){

    	$obras = Obra::all();
    	$donantes = Donante::all();

    	$totalObras = $obras->count();
    	$obrasAsignadas = count($obras->where('status', 'asignado'));
    	$obrasDisponibles = count($obras->where('status', 'disponible'));
    	$obrasOcultas = count($obras->where('status', 'oculto'));

    	$donantesRegistrados = $donantes->count();
    	$donantesQuePagaron = count($donantes->where('status', 'pago')); 
    	$donantesAtendidos = count($donantes->whereNotNull('obra_id'));
    	$donantesPorAtender = count($donantes->where('obra_id', NULL));

    	return view('backend.dashboard', compact('totalObras', 'obrasAsignadas', 'obrasDisponibles', 'obrasOcultas','donantesRegistrados', 'donantesQuePagaron','donantesAtendidos', 'donantesPorAtender'));

    }

    public function webhook(Request $request){

        \Log::info($request->all());
    }
}
