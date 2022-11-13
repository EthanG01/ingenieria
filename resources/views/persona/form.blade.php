<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombrePersona', $persona->nombrePersona, ['class' => 'form-control' . ($errors->has('nombrePersona') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombrePersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $persona->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $persona->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teléfono') }}
            {{ Form::text('telefonoPersona', $persona->telefonoPersona, ['class' => 'form-control' . ($errors->has('telefonoPersona') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('telefonoPersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('emailPersona', $persona->emailPersona, ['class' => 'form-control' . ($errors->has('emailPersona') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('emailPersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>