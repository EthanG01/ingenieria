<div class="box box-info padding-1">
    <div class="box-body">
        
    
        <div class="form-group">
            {{ Form::label('Nombre organización') }}
            {{ Form::text('nombreOrganizacion', $organizacion->nombreOrganizacion, ['class' => 'form-control' . ($errors->has('nombreOrganizacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreOrganizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <a>Agregar imagen</a>
        <img class="col-md-4 col-form-label text-md-right" src="../../../public/fotoOrganizaciones/{{$organizacion->fotoOrganizacion}}" alt="" width="150">
       
        <div class="col-md-6">
            <input id="fotoOrganizacion" type="file" class="form-control @error('fotoOrganizacion') is-invalid @enderror" name="fotoOrganizacion" value="{{ $organizacion->fotoOrganizacion }}" autocomplete="fotoOrganizacion">

            @error('fotoOrganizacion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>

            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de organización') }}
            {{ Form::select('tipo_organizacion_id', $tipoOrganizacions, $organizacion->tipo_organizacion_id, ['class' => 'form-control' . ($errors->has('tipo_organizacion_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tipo_organizacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>