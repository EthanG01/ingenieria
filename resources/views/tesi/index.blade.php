<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Tesis</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-tesis')
                        <a class="btn btn-warning" href="{{ route('tesis.create') }}">Crear nueva</a>
                        @endcan
                        <a class="btn btn-danger" href="{{ route('tesis.pdf') }}">PDF</a>
                        <a class="btn btn-success" href="{{ route('tesis.excel') }}">EXCEL</a>
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
                                <th style="color:#fff;">Carrera</th>
                                <th style="color:#fff;">Tipo de tesis</th>
                                <th style="color:#fff;">Autor</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">Descripción</th>
                                <th style="color:#fff;">Etiqueta</th>
                                <th style="color:#fff;">Documento</th>
                                <th style="color:#fff;">Fecha de publicación</th>
                                <th style="color:#fff;">Acciones</th>

                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tesis as $tesi)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $tesi->Carrera->nombreCarrera }}</td>
                                    <td>{{ $tesi->TipoTesi->nombreTesis }}</td>
                                    <td>{{ $tesi->Autor->nombreAutor }} {{ $tesi->Autor->apellidoAutor1 }}</td>
                                    <td>{{ $tesi->nombreTes }}</td>
                                    <td>{{ $tesi->descripcionTes }}</td>
                                    <td>{{ $tesi->Etiqueta->nombreEtiqueta}}</td>
                                    <td><a href="/archivosTes/{{ $tesi->documentoTes  }}" target="black_">Ver documento </a></td>

                                    <td>{{ $tesi->fechaPublicacionTes }}</td>

                                    <td>
                                        <form action="{{ route('tesis.destroy',$tesi->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('tesis.show',$tesi->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-tesis')
                                            <a class="btn btn-sm btn-success" href="{{ route('tesis.edit',$tesi->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-tesis')
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
            {!! $tesis->links() !!}
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
            'La tesi se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar una tesi',
                text: "¿Está seguro de eliminar esta tesi?",
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