@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Agregar tipo de artículo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                        <form method="POST" action="{{ route('tipo-articulos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipo-articulo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
