@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar proyecto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $proyecto->Categoria->nombreCategoria  }}
                        </div>
                        <div class="form-group">
                            <strong>Cantón:</strong>
                            {{ $proyecto->Canton->nombreCanton }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proyecto->nombreProyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $proyecto->Canton->Provincia->nombreProvincia  }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha inicial:</strong>
                            {{ $proyecto->fechaInicial }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha finalización:</strong>
                            {{ $proyecto->fechaFinalizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $proyecto->descripcionProyecto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
