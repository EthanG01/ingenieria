<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Artículos</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-articulo')
                        <a class="btn btn-warning" href="{{ route('articulos.create') }}">Crear nueva</a>
                        @endcan
                        <a class="btn btn-danger" href="{{ route('articulos.pdf') }}">PDF</a>
                        <a class="btn btn-success" href="{{ route('articulos.excel') }}">EXCEL</a>
                        &nbsp;
                        <form class="form-inline my-2 my-lg-0 float-right" role="search">
                            <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar nombre" aria-label="Search">
                            &nbsp;
                            <button class="btn btn-warning" type="text">Buscar</button>
                        </form>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mt-2">
                            <thead style="background-color:#6777ef">
                                <th style="color:#fff;">No</th>
                                <th style="color:#fff;">Dimensión</th>
                                <th style="color:#fff;">Variable</th>
                                <th style="color:#fff;">Indicador</th>
                                <th style="color:#fff;">Tipo</th>
                                <th style="color:#fff;">Autor</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">Descripción</th>
                                <th style="color:#fff;">Etiqueta</th>
                                <th style="color:#fff;">Doi</th>
                                <th style="color:#fff;">Documento</th>
                                <th style="color:#fff;">Fecha publicación</th>
                                <th style="color:#fff;">Acciones</th>

                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $articulo)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $articulo->Indicador->Variable->Dimension->nombreDimension }}</td>
                                    <td>{{ $articulo->Indicador->Variable->nombreVariable }}</td>
                                    <td>{{ $articulo->Indicador->nombreIndicador }}</td>

                                    <td>{{ $articulo->TipoArticulo->nombreArticulo }}</td>
                                    <td>{{ $articulo->Autor->nombreAutor }} {{ $articulo->Autor->apellidoAutor1 }}</td>
                                    <td>{{ $articulo->nombreArt }}</td>
                                    <td>{{ $articulo->descripcionArt }}</td>
                                    <td>{{ $articulo->Etiqueta->nombreEtiqueta }}</td>
                                    <td>{{ $articulo->doi }}</td>
                                    <td><a href="/archivoArticulo/{{ $articulo->documentoArt  }}" target="black_">Ver documento </a></td>

                                    <td>{{ $articulo->fechaPublicacionArt }}</td>

                                    <td>
                                        <form action="{{ route('articulos.destroy',$articulo->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('articulos.show',$articulo->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-articulo')
                                            <a class="btn btn-sm btn-success" href="{{ route('articulos.edit',$articulo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-articulo')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $articulos->links() !!}
        </div>
    </div>
    </div>
    @endsection

    @section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
            'Eliminado!',
            'El articulo se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar un articulo',
                text: "¿Está seguro de eliminar este articulo?",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
    @endsection