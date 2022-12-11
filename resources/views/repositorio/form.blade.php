<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Persona') }}
            {{ Form::select('persona_id',$personas, $repositorios->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::select('carrera_id',$carreras, $repositorios->carrera_id, ['class' => 'form-control' . ($errors->has('carrera_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('carrera_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre repositorio') }}
            {{ Form::text('nombre', $repositorios->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fecha', $repositorios->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo repositorio') }}
            {{ Form::select('tipo', [ 'PPS' => 'Práctica Profesionales','Articulo' => 'Artículos Científicos', 'Investigaciones' => 'Investigaciones', 'Campo' => 'Trabajos de campo' ], $repositorios->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <img class="col-md-4 col-form-label text-md-right" src="../../../public/repositorio/{{$repositorios->documento}}" alt="" width="150">
        <a>Agregar documento</a>
        <div class="col-md-6">
           
            <input id="documento" type="file" class="form-control @error('documento') is-invalid @enderror" name="documento" value="{{ $repositorios->documento }}" autocomplete="documento">

            @error('documento')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>




        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('descripcion', $repositorios->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>