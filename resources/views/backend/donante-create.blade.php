@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar nuevo donante</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('donante.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="fomato" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autofocus>

                            </div>
                        </div>
                        

                       <!--  <div class="form-group row">
                            <label for="fecha_donacion" class="col-md-4 col-form-label text-md-right">Fecha de Donacion</label>

                            <div class="col-md-6">
                                <input id="fecha_donacion" type="text" class="form-control @error('fecha_donacion') is-invalid @enderror" name="fecha_donacion" value="{{ old('fecha_donacion') }}" autofocus>

                            </div>
                        </div> -->

        

                        <div class="form-group row">
                            <label for="observaciones" class="col-md-4 col-form-label text-md-right">Observaciones</label>

                            <div class="col-md-6">
                            	<textarea name="observaciones" id="observaciones" cols="30" rows="10" class="form-control"></textarea>
                                
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Estado</label>

                            <div class="col-md-6">

                            	{{ Form::select('status', ['registrado' => 'Registrado', 'pago' => 'pago'], null, ['class' => 'form-control']) }}

                            </div>
                        </div>
                  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
