<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('descripcionGaleria', $galeria->descripcionGaleria, ['class' => 'form-control' . ($errors->has('descripcionGaleria') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('descripcionGaleria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- {{-- <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $galeria->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}} -->
<a>Agregar imagen</a>
        <img class="col-md-4 col-form-label text-md-right" src="../../../public/imagenes/{{$galeria->imagen}}" alt="" width="150">

        <div class="col-md-6">
            <input id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ $galeria->imagen }}" autocomplete="imagen">

            @error('imagen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('Tema') }}
            {{ Form::select('tema_id', $temas, $galeria->tema_id, ['class' => 'form-control' . ($errors->has('tema_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tema_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>