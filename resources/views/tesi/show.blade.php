@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar tesis</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tesis.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $tesi->Carrera->nombreCarrera  }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de tesis:</strong>
                            {{ $tesi->TipoTesi->nombreTesis  }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $tesi->Autor->nombreAutor }} {{ $tesi->Autor->apellidoAutor1 }} 
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tesi->nombreTes }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $tesi->descripcionTes }}
                        </div>
                        <div class="form-group">
                            <strong>Etiqueta:</strong>
                            {{ $tesi->Etiqueta->nombreEtiqueta }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            <td><a href="/ArchivosTes/{{ $tesi->documentoTes  }}" target="black_">Ver documento </a></td>
                        </div>
                        <div class="form-group">
                            <strong>Fecha publicación:</strong>
                            {{ $tesi->fechaPublicacionTes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
