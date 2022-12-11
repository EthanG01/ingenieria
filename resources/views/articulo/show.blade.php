@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar artículo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articulos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Indicador:</strong>
                            {{ $articulo->Indicador->nombreIndicador  }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $articulo->Autor->nombreAutor }} {{ $articulo->Autor->apellidoAutor1 }} 
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $articulo->nombreArt }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $articulo->descripcionArt }}
                        </div>
                        <div class="form-group">
                            <strong>Etiqueta:</strong>
                            {{ $articulo->Etiqueta->nombreEtiqueta }}
                        </div>
                        <div class="form-group">
                            <strong>Doi:</strong>
                            {{ $articulo->doi }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            <td><a href="/archivoArticulo/{{ $articulo->documentoArt  }}" target="black_">Ver documento </a></td>
                        </div>
                        <div class="form-group">
                            <strong>Fecha publicación:</strong>
                            {{ $articulo->fechaPublicacionArt }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
