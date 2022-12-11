@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar persona</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->nombrePersona }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $persona->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $persona->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $persona->telefonoPersona }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $persona->emailPersona }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
