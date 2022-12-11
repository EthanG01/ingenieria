<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre ') }}
            {{ Form::text('nombreArticulo', $tipoArticulo->nombreArticulo, ['class' => 'form-control' . ($errors->has('nombreArticulo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreArticulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionArticulo', $tipoArticulo->descripcionArticulo, ['class' => 'form-control' . ($errors->has('descripcionArticulo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionArticulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>