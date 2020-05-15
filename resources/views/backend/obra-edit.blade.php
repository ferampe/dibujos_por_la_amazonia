@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Obra</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('obra.update', $obra->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        

                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">Titulo de la Obra</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo', $obra->titulo) }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">Numero de la Obra</label>

                            <div class="col-md-2">
                                <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero', $obra->numero) }}" autocomplete="fomato" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="artista" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="artista" type="text" class="form-control @error('artista') is-invalid @enderror" name="artista" value="{{ old('nombre', $obra->artista) }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dimensiones" class="col-md-4 col-form-label text-md-right">Dimensiones</label>

                            <div class="col-md-6">
                                <input id="dimensiones" type="text" class="form-control @error('dimensiones') is-invalid @enderror" name="dimensiones" value="{{ old('dimensiones', $obra->dimensiones) }}" autocomplete="dimensiones" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ano" class="col-md-4 col-form-label text-md-right">Año</label>

                            <div class="col-md-2">
                                <input id="ano" type="text" class="form-control @error('ano') is-invalid @enderror" name="ano" value="{{ old('ano', $obra->ano) }}" autocomplete="fomato" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tecnica" class="col-md-4 col-form-label text-md-right">Tecnica</label>

                            <div class="col-md-3">
                                <small>Tecnica Español</small>
                                <textarea name="tecnica" class="form-control" id="tecnica" cols="30" rows="8">{{ old('tecnica', $obra->tecnica) }}</textarea>
                                

             

                            </div>

                            <div class="col-md-3">
                                <small>Tecnica Ingles</small>
                                <textarea name="en_tecnica" class="form-control" id="en_tecnica" cols="30" rows="8">{{ old('en_tecnica', $obra->en_tecnica) }}</textarea>
                                

                            </div>
                        </div>

                    

                        @if($obra->imagen)
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right"></div>
                            <div class="col-md-6">
                                <div class="card" style="width: 100%;">
                                  <img class="card-img-top" src="/thumbnails/thumb_{{ $obra->imagen }}">
                                </div>
                            </div>
                        </div>
                        @endif

                        



                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Cambiar Imagen</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Estado</label>

                            <div class="col-md-6">

                              
                                {{ Form::select('status', ['disponible' => 'Disponible', 'oculto' => 'Oculto', 'asignado' => 'Asignado'], $obra->status, ['class' => 'form-control']) }}

                            </div>
                        </div>

                  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Actualizar
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
