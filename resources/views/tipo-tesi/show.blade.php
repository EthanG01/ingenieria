@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar tipo tesis</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-tesis.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoTesi->nombreTesis }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $tipoTesi->descripcionTesis }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
