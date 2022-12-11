<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Editorial') }}
            {{ Form::select('editorial_id',$editorials, $libroRevista->editorial_id, ['class' => 'form-control' . ($errors->has('editorial_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('editorial_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo libro/revista') }}
            {{ Form::select('tipolibro_id',$tipolibros, $libroRevista->tipolibro_id, ['class' => 'form-control' . ($errors->has('tipolibro_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tipolibro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::select('autor_id', $autors,$libroRevista->autor_id, ['class' => 'form-control' . ($errors->has('autor_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('autor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('etiqueta') }}
            {{ Form::select('etiqueta_id',$etiquetas, $libroRevista->etiqueta_id, ['class' => 'form-control' . ($errors->has('etiqueta_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('etiqueta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edición') }}
            {{ Form::text('edicion', $libroRevista->edicion, ['class' => 'form-control' . ($errors->has('edicion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('edicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('título') }}
            {{ Form::text('titulo', $libroRevista->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad pág') }}
            {{ Form::text('cant_pag', $libroRevista->cant_pag, ['class' => 'form-control' . ($errors->has('cant_pag') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('cant_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      
        
        <img class="col-md-4 col-form-label text-md-right" src="../../../public/libros/{{$libroRevista->documentoLR}}" alt="" width="150">
        <a>Agregar documento</a>
        <div class="col-md-6">
           
            <input id="documentoLR" type="file" class="form-control @error('documentoLR') is-invalid @enderror" name="documentoLR" value="{{ $libroRevista->documentoLR }}" autocomplete="documentoLR">

            @error('documentoLR')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group">
            {{ Form::label('fecha Publicación') }}
            {{ Form::date('fechaPublicacionLR', $libroRevista->fechaPublicacionLR, ['class' => 'form-control' . ($errors->has('fechaPublicacionLR') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fechaPublicacionLR', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>