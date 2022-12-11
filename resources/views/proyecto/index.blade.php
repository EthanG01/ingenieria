<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Proyecto</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-proyecto')
                        <a class="btn btn-warning" href="{{ route('proyectos.create') }}">Crear nuevo</a>
                        @endcan
                        <a class="btn btn-danger" href="{{ route('proyectos.pdf') }}">PDF</a>
                        <a class="btn btn-success" href="{{ route('proyectos.excel') }}">EXCEL</a>
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
                                <th style="color:#fff;">Categoria</th>
                                <th style="color:#fff;">Provincia</th>
                                <th style="color:#fff;">Canton</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">Fecha de inicio</th>
                                <th style="color:#fff;">Fecha de finalización</th>
                                <th style="color:#fff;">Descripción</th>
                                <th style="color:#fff;">Acciones</th>

                                <th></th>

                            </thead>
                            <tbody>
                                @foreach ($proyectos as $proyecto)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $proyecto->Categoria->nombreCategoria }}</td>

                                    <td>{{ $proyecto->Canton->Provincia->nombreProvincia }}</td>
                                    <td>{{ $proyecto->Canton->nombreCanton }}</td>
                                    <td>{{ $proyecto->nombreProyecto }}</td>
                                    <td>{{ $proyecto->fechaInicial }}</td>
                                    <td>{{ $proyecto->fechaFinalizacion }}</td>
                                    <td>{{ $proyecto->descripcionProyecto }}</td>
                                    <td>
                                        <form action="{{ route('proyectos.destroy',$proyecto->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-proyecto')
                                            <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-proyecto')
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
            {!! $proyectos->links() !!}
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
            'El proyecto se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar un proyecto',
                text: "¿Está seguro de eliminar este proyecto?",
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