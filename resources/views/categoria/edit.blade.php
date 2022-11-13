@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar categoría</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                    <div class="card-body">
                    <div class="table-responsive">
                        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}"  role="form" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                        
                            <div class="form-group">
                                {{ Form::label('nombre Categoria') }}
                                {{ Form::text('nombreCategoria', $categoria->nombreCategoria, ['class' => 'form-control' . ($errors->has('nombreCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecategoria']) }}
                                {!! $errors->first('nombreCategoria', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                         
                            <div class="form-group cold-md-6">
                                <label for="logo">logo</label><br>
                                    {{Form::file('logo')}}
                                    @if($categoria->logo != "")
                                        <img src="{{asset('/logos/'.$categoria->logo)}}" alt="{{$categoria->logo}}" width="200px" height="200px" ">
                                    @endif

                                   

                            </div>
                            <div class="card-footer text-muted small">
                                {{ $categoria->updated_at }}
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                                <br>
                                <a href="{{ route('categorias.index')}}">
                                    {{-- <button type="button" class="btn btn-danger  float-right mr-1 ">
                                        <i class="far fa-window-close"></i>
                                    </button>  --}}
                                    
                                </a>
                            </div>
                            </div>
                            
                        </form>
                        </div>
                        @endsection
 