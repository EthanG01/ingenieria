@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar cantón organización</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('canton-organizacions.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $cantonOrganizacion->Canton->Provincia->nombreProvincia }}
                        </div>
                        <div class="form-group">
                            <strong>Cantón:</strong>
                            {{ $cantonOrganizacion->Canton->nombreCanton }}
                        </div>
                        <div class="form-group">
                            <strong>Organización:</strong>
                            {{ $cantonOrganizacion->Organizacion->nombreOrganizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $cantonOrganizacion->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
