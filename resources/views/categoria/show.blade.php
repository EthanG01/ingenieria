@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar categoría</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $categoria->nombreCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                        <td>
                            <img class="rounded-circle" src="{{asset('/logos/'.$categoria->logo)}}" alt="{{$categoria->logos}}" width="100" height="100">
                        </td>
                        @csrf
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
