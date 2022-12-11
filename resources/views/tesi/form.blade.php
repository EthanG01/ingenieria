<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('carrera') }}
            {{ Form::select('carrera_id',$carreras, $tesi->carrera_id, ['class' => 'form-control' . ($errors->has('carrera_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('carrera_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo de tesis') }}
            {{ Form::select('tipotesis_id',$tipotesis ,$tesi->tipotesis_id, ['class' => 'form-control' . ($errors->has('tipotesis_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tipotesis_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::select('autor_id',$autors, $tesi->autor_id, ['class' => 'form-control' . ($errors->has('autor_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('autor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('etiqueta') }}
            {{ Form::select('etiqueta_id',$etiquetas, $tesi->etiqueta_id, ['class' => 'form-control' . ($errors->has('etiqueta_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('etiqueta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre tesis') }}
            {{ Form::text('nombreTes', $tesi->nombreTes, ['class' => 'form-control' . ($errors->has('nombreTes') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreTes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionTes', $tesi->descripcionTes, ['class' => 'form-control' . ($errors->has('descripcionTes') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionTes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
        <a>Agregar documento</a>
        <img class="col-md-4 col-form-label text-md-right" src="../../../public/archivosTes/{{$tesi->documentoTes}}" alt="" width="150">

        <div class="col-md-6">
            <input id="documentoTes" type="file" class="form-control @error('documentoTes') is-invalid @enderror" name="documentoTes" value="{{ $tesi->documentoTes }}" autocomplete="documentoTes">

            @error('documentoTes')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
  </div>
  
        <div class="form-group">
            {{ Form::label('fecha Publicación') }}
            {{ Form::date('fechaPublicacionTes', $tesi->fechaPublicacionTes, ['class' => 'form-control' . ($errors->has('fechaPublicacionTes') ? ' is-invalid' : ''), 'placeholder' => 'Fechapublicaciontes']) }}
            {!! $errors->first('fechaPublicacionTes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>