<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dimensión') }}
            {{ Form::select('dimension_id',$dimensions, $variable->dimension_id, ['class' => 'form-control' . ($errors->has('dimension_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('dimension_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('nombre Variable') }}
            {{ Form::text('nombreVariable', $variable->nombreVariable, ['class' => 'form-control' . ($errors->has('nombreVariable') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreVariable', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>