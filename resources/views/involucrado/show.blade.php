@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar involucrado</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('involucrados.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona:</strong>
                            {{ $involucrado->Persona->nombrePersona }}
                        </div>
                        <div class="form-group">
                            <strong>Cantón organización:</strong>
                            {{ $involucrado->CantonOrganizacion->Organizacion->nombreOrganizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Implicacion:</strong>
                            {{ $involucrado->Implicacion->nombreImplicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $involucrado->descripcionInvolucrado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
