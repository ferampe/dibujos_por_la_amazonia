@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1>Obras</h1>
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col">
                            <a href="{{ route('obra.create') }}" class="btn btn-primary btn-sm">Registrar nueva obra</a>
                        </div>

                        <div class="col">
                            <form action="{{ route('obra.index') }}">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                                </div>
                                <input type="text" name="query" class="form-control" autocomplete="off" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                            </form>
                        </div>
                    </div>

                    

 
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                
                                <th colspan=2>Nombre</th>
                                <th>Titulo de la Obra</th>
                                <th>Numero</th>  
                                <th>Estado</th>
                                <th></th>  
                            </tr>
                            
                        </thead>

                        <tbody>
                            @foreach($obras as $obra)

                            <tr class="{{ $obra->status == 'asignado' ? 'table-info' : null }}">
                                <td><img src="/thumbnails/thumb2_{{$obra->imagen}}" width="40px" alt=""></td>
                                <td>{{$obra->artista}}</td>
                                <td>{{ $obra->titulo}}</td>
                                <td>{{ $obra->numero}}</td>
                                <td>
                                    {{ Str::ucfirst($obra->status) }}
                                    @if(isset($obra->donante))
                                    <br>
                                    <small>{{ $obra->donante->nombre}}</small>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('obra.edit', $obra->id )}}" class="btn btn-primary btn-sm">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>

                <div class="card-footer">
                    {{ $obras->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
