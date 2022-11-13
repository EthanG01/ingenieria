<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('indicador') }}
            {{ Form::select('indicador_id',$indicadors, $articulo->indicador_id, ['class' => 'form-control' . ($errors->has('indicador_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('indicador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo artículos') }}
            {{ Form::select('tipoarticulos_id',$tipoarticulos, $articulo->tipoarticulos_id, ['class' => 'form-control' . ($errors->has('tipoarticulos_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tipoarticulos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::select('autor_id',$autors, $articulo->autor_id, ['class' => 'form-control' . ($errors->has('autor_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('autor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('etiqueta') }}
            {{ Form::select('etiqueta_id',$etiquetas, $articulo->etiqueta_id, ['class' => 'form-control' . ($errors->has('etiqueta_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('etiqueta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre artículo') }}
            {{ Form::text('nombreArt', $articulo->nombreArt, ['class' => 'form-control' . ($errors->has('nombreArt') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreArt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionArt', $articulo->descripcionArt, ['class' => 'form-control' . ($errors->has('descripcionArt') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionArt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      
        <div class="form-group">
            {{ Form::label('Doi') }}
            {{ Form::text('doi', $articulo->doi, ['class' => 'form-control' . ($errors->has('doi') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('doi', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <a>Agregar documento</a>
        <img class="col-md-4 col-form-label text-md-right" src="../../../public/archivoArticulo/{{$articulo->documentoArt}}" alt="" width="150">
        <div class="col-md-6">
            <input id="documentoArt" type="file" class="form-control @error('documentoArt') is-invalid @enderror" name="documentoArt" value="{{ $articulo->documentoArt }}" autocomplete="documentoArt">

            @error('documentoArt')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
  </div>
        <div class="form-group">
            {{ Form::label('Fecha Publicación') }}
            {{ Form::date('fechaPublicacionArt', $articulo->fechaPublicacionArt, ['class' => 'form-control' . ($errors->has('fechaPublicacionArt') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fechaPublicacionArt', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>