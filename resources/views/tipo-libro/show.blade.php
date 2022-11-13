@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar tipo libro/revista</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-libros.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoLibro->nombreLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $tipoLibro->descripcionLibro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
