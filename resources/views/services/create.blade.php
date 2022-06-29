@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Registro de servicios</h2>
@stop

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
    <form action="{{route('servicio.store')}}" method="POST">
        @csrf
        Servicio:
        <input type="text" placeholder="Ingrese el nombre del servicio..." class="form-control" name="servicio">
        <small class="text-danger">{{ $errors->first('servicio') }} </small>
        Precio:
        <input type="text" placeholder="precio del servicio" class="form-control" name="precio">
        <small class="text-danger">{{ $errors->first('precio') }} </small>
        Foto:
        <input type="text" placeholder="fotografia del servicio." class="form-control" name="foto">
        <small class="text-danger">{{ $errors->first('foto') }} </small>
        Sitio:
        <select name="sites_id" class="form-control">
            <option selected="true" disabled="disabled">Seleccione un sitio </option>
            @foreach ($sitios as $sitio)
                <option value="{{ $sitio->id }}">{{ $sitio->nombre }}</option>
            @endforeach
        </select>
            <small class="text-danger">{{ $errors->first('sites_id') }}</small><br>
        
        <div class="col-md-12-mt-4 text-center">
            <button type="submit"  class="btn btn-danger">Registrar</button>
        </div>
        

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
