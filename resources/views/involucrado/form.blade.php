<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Persona') }}
            {{ Form::select('persona_id', $personas, $involucrado->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
 
        
        <div class="form-group">
            {{ Form::label('cantón organización') }}
            {{ Form::select('canton_organizacion_id', $Organizacions, $involucrado->canton_organizacion_id, ['class' => 'form-control' . ($errors->has('canton_organizacion_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('canton_organizacion_id', '<div class="invalid-feedback">:message</div>') !!}
           
        </div>
        <div class="form-group">
            {{ Form::label('implicación') }}
            {{ Form::select('implicacion_id', $implicacions, $involucrado->implicacion_id, ['class' => 'form-control' . ($errors->has('implicacion_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('implicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionInvolucrado', $involucrado->descripcionInvolucrado, ['class' => 'form-control' . ($errors->has('descripcionInvolucrado') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionInvolucrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>