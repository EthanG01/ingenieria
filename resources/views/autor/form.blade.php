<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre ') }}
            {{ Form::text('nombreAutor', $autor->nombreAutor, ['class' => 'form-control' . ($errors->has('nombreAutor') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreAutor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellidoAutor1', $autor->apellidoAutor1, ['class' => 'form-control' . ($errors->has('apellidoAutor1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellidoAutor1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellidoAutor2', $autor->apellidoAutor2, ['class' => 'form-control' . ($errors->has('apellidoAutor2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellidoAutor2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>