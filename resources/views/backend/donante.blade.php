@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1>Donantes</h1>
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            @if(session('warning'))
            <div class="alert alert-warning" role="alert">
                {{ session('warning') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col">
                            <a href="{{ route('donante.create') }}" class="btn btn-primary btn-sm">Registrar nuevo donante</a>
                        </div>

                        <div class="col">
                            <form action="{{ route('donante.index') }}">
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
                    <form method="POST" action="{{ route('sortear')}}">
                        @csrf
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Obra</th>
                                <th>Estado</th>
                                <th></th>  
                            </tr>
                            
                        </thead>

                        <tbody>
                            @foreach($donantes as $donante)
                            <tr>
                                <td>
                                    @if($donante->status == 'pago' && $donante->obra_id == null)
                                    <div class="checkbox checkbox-inline checkbox-primary checkbox-sm">
                                        <input type="checkbox" class="styled" id="checkbox-{{$donante->id}}" value="{{$donante->id}}" name="ids[]">
                                        <label for="checkbox-{{$donante->id}}"></label>
                                    </div>
                                    @endif

                                </td>
                                <td>{{ $donante->nombre}}</td>
                                <td>{{ $donante->email}}</td>

                                @if($donante->obra)
                                <td><img src="/thumbnails/thumb2_{{$donante->obra->imagen}}" width="40px" alt=""></td>
                                @else
                                <td></td>
                                @endif
                                
                                <td>{{ Str::ucfirst($donante->status) }}</td>
                                <td>
                                    <a href="{{ route('donante.edit', $donante->id )}}" class="btn btn-primary btn-sm">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        
                    </table>

                    <button type="submit">Sortear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
