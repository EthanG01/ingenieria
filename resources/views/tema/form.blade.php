<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tema') }}
            {{ Form::text('tema', $tema->tema, ['class' => 'form-control' . ($errors->has('tema') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tema', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>