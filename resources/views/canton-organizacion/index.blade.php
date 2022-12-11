<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Cantón Organización</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-cantonOrg')
                        <a class="btn btn-warning" href="{{ route('canton-organizacions.create') }}">Crear nueva</a>
                        @endcan
                        <a class="btn btn-danger" href="{{ route('canton-organizacions.pdf') }}">PDF</a>
                        <a class="btn btn-success" href="{{ route('canton-organizacions.excel') }}">EXCEL</a>
                        &nbsp;
                        <form class="form-inline my-2 my-lg-0 float-right" role="search">
                            <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar direccion" aria-label="Search">
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
                                <th style="color:#fff;">Logo</th>
                                <th style="color:#fff;">Organización</th>
                                <th style="color:#fff;">Provincia</th>
                                <th style="color:#fff;">Cantón</th>
                                <th style="color:#fff;">Dirección</th>
                                <th style="color:#fff;">Acciones</th>

                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cantonOrganizacions as $cantonOrganizacion)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        <img class="rounded-circle" src="{{asset('/fotoOrganizaciones/'.$cantonOrganizacion->Organizacion->fotoOrganizacion)}}" alt="{{$cantonOrganizacion->Organizacion->fotoOrganizaciones}}" width="100" height="100">
                                    </td>

                                    <td>{{ $cantonOrganizacion->Organizacion->nombreOrganizacion }}</td>
                                    <td>{{ $cantonOrganizacion->Canton->Provincia->nombreProvincia }}</td>
                                    <td>{{ $cantonOrganizacion->Canton->nombreCanton }}</td>

                                    <td>{{ $cantonOrganizacion->direccion }}</td>

                                    <td>
                                        <form action="{{ route('canton-organizacions.destroy',$cantonOrganizacion->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('canton-organizacions.show',$cantonOrganizacion->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-cantonOrg')
                                            <a class="btn btn-sm btn-success" href="{{ route('canton-organizacions.edit',$cantonOrganizacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-cantonOrg')
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
            {!! $cantonOrganizacions->links() !!}
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
            'El cantón organización se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar un cantón organización',
                text: "¿Está seguro de eliminar este cantón organización?",
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