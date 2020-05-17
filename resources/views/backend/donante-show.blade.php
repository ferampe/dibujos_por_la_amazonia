@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Donante</div>

                <div class="card-body">

                	<ul class="list-group list-group-flush">
					    <li class="list-group-item">Nombre: <strong>{{ $donante->nombre }}</strong></li>
					    <li class="list-group-item">Numero Identificacion: <strong>{{ $donante->identificacion }}</strong></li>
					    <li class="list-group-item">Email: <strong>{{ $donante->email }}</strong></li>
					    <li class="list-group-item">Telefono: <strong>{{ $donante->telefono }}</strong></li>
					    <li class="list-group-item">Pais: <strong>{{ $donante->pais }}</strong></li>
					    <li class="list-group-item">Direccion: <strong>{{ $donante->direccion }}</strong></li>
					    <li class="list-group-item">Transaccion: <strong>{{ $donante->transaccion }}</strong></li>
					    <li class="list-group-item">Observaciones: <strong>{{ $donante->observaciones }}</strong></li>
					    <li class="list-group-item">Estado: <strong>{{ $donante->status }}</strong></li>
					</ul>

					@if(isset($donante->obra))
					<!-- <img src="/thumbnails/{{ $donante->obra->imagen}}" class="rounded mx-auto d-block" alt="..."> -->
						<strong class="ml-4 mb-4">Obra Asignada</strong>
						<picture>
						  <source srcset="/thumbnails/{{ $donante->obra->imagen}}" type="image/svg+xml">
						  <img src="/thumbnails/{{ $donante->obra->imagen}}" class="img-fluid img-thumbnail" alt="...">
						</picture>
					@endif

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
