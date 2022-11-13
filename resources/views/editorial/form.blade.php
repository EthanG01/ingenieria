<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre Editorial') }}
            {{ Form::text('nombreEditorial', $editorial->nombreEditorial, ['class' => 'form-control' . ($errors->has('nombreEditorial') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreEditorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionEditorial', $editorial->descripcionEditorial, ['class' => 'form-control' . ($errors->has('descripcionEditorial') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionEditorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>