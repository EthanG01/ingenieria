
@extends('layouts.app')

@section('template_title')
{{ __('Vista') }}
@endsection

@section('content')
<div>
    <div>

        <div class="card-body">
                        
            <div class="form-group">
                <strong>Provincia Id:</strong>
                {{ $provincias->nombreProvincia }}
            </div>
            <div class="form-group">
                <strong>Nombrecanton:</strong>
                {{ $cantons->nombreCanton }}
            </div>


    </div>
    
</div>
@endsection