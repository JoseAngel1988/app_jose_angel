@extends('layouts.app')

@section('titulo', 'Listado de cursos')

@section('contenido')
<style>
    body{
    background-color: forestgreen

    }

    </style>

<br>
<h3 class="text-center">Listado de Nuevos cursos</h3>
<br>

<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($course as $cursito)
    <div class="col-sm"> {{--abrimos columna--}}
        <div class="card" style="width: 18rem;">
            <img style="height: 100px; width:150px; margin:5px" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$cursito->nombre}}</h5>
              <p class="card-text">{{$cursito->descripcion}}</p>
              <a href="/cursos/{{$cursito->id}}" class="btn btn-success">Go there</a>
            </div>
        </div>
    </div>
    @endforeach
</div> {{--cierro el div row--}}

@endsection
