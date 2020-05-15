@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col">
            <h1>Obras</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Total Obras</div>
              <div class="card-body text-center">
                <h1>{{ $totalObras }}</h1>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Obras Asignadas</div>
              <div class="card-body text-center">
                <h1>{{ $obrasAsignadas }}</h1>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Obras disponibles</div>
              <div class="card-body text-center">
                <h1>{{ $obrasDisponibles }}</h1>
                <small>Obras que faltan por asignar</small>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-danger mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Obras ocultas</div>
              <div class="card-body text-center">
                <h1>{{ $obrasOcultas }}</h1>
              </div>
            </div>
        </div>
    </div>
            

    <hr>
    <div class="row">
        <div class="col">
            <h1>Donantes</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Donantes registrados</div>
              <div class="card-body text-center">
                <h1>{{ $donantesRegistrados }}</h1>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Donantes que han pagado</div>
              <div class="card-body text-center">
                <h1>{{ $donantesQuePagaron }}</h1>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Donantes atendidos</div>
              <div class="card-body text-center">
                <h1>{{ $donantesAtendidos }}</h1>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Donantes Pendiente</div>
              <div class="card-body text-center">
                <h1>{{ $donantesPorAtender }}</h1>
              </div>
            </div>
        </div>
    </div>

            

            

        
</div>
@endsection
