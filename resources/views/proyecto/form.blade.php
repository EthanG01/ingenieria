<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::select('categoria_id',$categorias,$proyecto->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantón') }}
            {{ Form::select('canton_id', $cantons,$proyecto->canton_id, ['class' => 'form-control' . ($errors->has('canton_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('canton_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre proyecto') }}
            {{ Form::text('nombreProyecto', $proyecto->nombreProyecto, ['class' => 'form-control' . ($errors->has('nombreProyecto') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreProyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
       
        <div class="form-group">
            {{ Form::label('fecha Inicial') }}
            {{ Form::date('fechaInicial', $proyecto->fechaInicial, ['class' => 'form-control' . ($errors->has('fechaInicial') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fechaInicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha Finalizacion') }}
            {{ Form::date('fechaFinalizacion', $proyecto->fechaFinalizacion, ['class' => 'form-control' . ($errors->has('fechaFinalizacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fechaFinalizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción Proyecto') }}
            {{ Form::text('descripcionProyecto', $proyecto->descripcionProyecto, ['class' => 'form-control' . ($errors->has('descripcionProyecto') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionProyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>