<?php

namespace App;

use App\Obra;
use App\Donante;

class Proceso{

	public function sortear(Array $arrDonantes){



		foreach($arrDonantes as $donante){
			
			$obra = Obra::where('status', 'disponible')->inRandomOrder()->first();
			
			if($obra){
				
				$obra->status = 'asignado';
				$obra->save();	

				$donante = Donante::find($donante);
				$donante->obra_id = $obra->id;
				$donante->save();
			}
		}	
	}

}