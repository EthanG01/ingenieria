@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar libro/revista</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libro-revistas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libroRevista->editorial->nombreEditorial  }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $libroRevista->tipolibro->nombreLibro  }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libroRevista->autor->nombreAutor }} {{ $libroRevista->autor->apellidoAutor1 }}
                        </div>
                        <div class="form-group">
                            <strong>Edición:</strong>
                            {{ $libroRevista->edicion }}
                        </div>
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $libroRevista->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Pág:</strong>
                            {{ $libroRevista->cant_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Etiqueta:</strong>
                            {{ $libroRevista->etiqueta->nombreEtiqueta }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            <td><a href="/Libros/{{ $libroRevista->documentoLR  }}" target="black_">Ver documento </a></td>
                        </div>
                        <div class="form-group">
                            <strong>Fecha publicación:</strong>
                            {{ $libroRevista->fechaPublicacionLR }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
