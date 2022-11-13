<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('involucrado') }}
            {{ Form::select('involucrados_id',$personas, $involucradoProyecto->involucrados_id, ['class' => 'form-control' . ($errors->has('involucrados_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('involucrados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proyecto') }}
            {{ Form::select('proyecto_id',$proyectos, $involucradoProyecto->proyecto_id, ['class' => 'form-control' . ($errors->has('proyecto_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('proyecto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>