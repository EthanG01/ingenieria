<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Organización</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-organizacion')
                        <a class="btn btn-warning" href="{{ route('organizacions.create') }}">Crear nueva</a>
                        @endcan
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
                                <th style="color:#fff;">Tipo</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">Foto</th>
                                <th style="color:#fff;">Acciones</th>
                                <th></th>

                            </thead>
                            <tbody>
                                @foreach ($organizacions as $organizacion)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $organizacion->TipoOrganizacion->nombreTipoOrganizacion }}</td>
                                    <td>{{ $organizacion->nombreOrganizacion }}</td>
                                    {{-- <td>{{ $organizacion->fotoOrganizacion }}</td> --}}
                                    <td>
                                        <img class="rounded-circle" src="{{asset('/fotoOrganizaciones/'.$organizacion->fotoOrganizacion)}}" alt="{{$organizacion->fotoOrganizaciones}}" width="100" height="100">
                                    </td>

                                    <td>
                                        <form action="{{ route('organizacions.destroy',$organizacion->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('organizacions.show',$organizacion->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-organizacion')
                                            <a class="btn btn-sm btn-success" href="{{ route('organizacions.edit',$organizacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-organizacion')
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
            {!! $organizacions->links() !!}
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
            'La organización se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar una organización',
                text: "¿Está seguro de eliminar esta organización?",
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