@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar Repositorio</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('repositorioNuevo.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Persona:</strong>
                            {{ $repositorios->persona->nombrePersona }} {{ $repositorios->persona->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $repositorios->carrera->nombreCarrera }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $repositorios->nombre  }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $repositorios->fecha  }}
                        </div>

                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $repositorios->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $repositorios->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            <td><a href="/repositorio/{{ $repositorios->documento  }}" target="black_">Ver documento </a></td>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
