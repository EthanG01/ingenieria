<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Repositorio</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-repositorio')
                                <a class="btn btn-warning" href="{{ route('repositorioNuevo.create') }}">Crear nuevo</a>
                            @endcan
                            <a class="btn btn-danger" href="{{ route('repositorios.pdf') }}">PDF</a>
                            <a class="btn btn-success" href="{{ route('repositorios.excel') }}">EXCEL</a>
                            &nbsp; 
                            <form class="form-inline my-2 my-lg-0 float-right" role="search">
                                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar nombre"
                                    aria-label="Search">
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
                                    <th style="color:#fff;">Persona</th>
                                    <th style="color:#fff;">Carrera</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Descripción</th>
                                    <th style="color:#fff;">Tipo</th>
                                    <th style="color:#fff;">Documento</th>
                                    @can('habilitar-repositorio')
                                        <th style="color:#fff;">Estado</th>
                                    @endcan
                                    <th style="color:#fff;">Acciones</th>

                                    <th></th>

                                </thead>
                                <tbody>
                                    @foreach ($repositorios as $repositorio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $repositorio->persona->nombrePersona }} {{ $repositorio->persona->apellido1 }}</td>
                                            <td>{{ $repositorio->carrera->nombreCarrera }}</td>
                                            <td>{{ $repositorio->nombre }}</td>
                                            <td>{{ $repositorio->fecha }}</td>
                                            <td>{{ $repositorio->descripcion }}</td>
                                            <td>{{ $repositorio->tipo }}</td>
                                            <td><a href="/repositorio/{{ $repositorio->documento }}" target="black_">Ver
                                                    documento </a></td>
                                            @can('habilitar-repositorio')
                                                @if ($repositorio->estado == 0)
                                                    <td>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('repositorios.estado', $repositorio->id) }}">Habilitar</a>
                                                    </td>
                                                @endif
                                                @if ($repositorio->estado == 1)
                                                    <td>
                                                        <a class="btn btn-sm btn-danger"
                                                            href="{{ route('repositorios.estado', $repositorio->id) }}">Desabilitar</a>

                                                    </td>
                                                @endif
                                            @endcan

                                            <td colspan="3">
                                                <form action="{{ route('repositorioNuevo.destroy', $repositorio->id) }}"
                                                    class="formulario-eliminar" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('repositorioNuevo.show', $repositorio->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    @can('editar-repositorio')
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('repositorioNuevo.edit', $repositorio->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-repositorio')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i> Eliminar</button>
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
                {!! $repositorios->links() !!}
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
                    'El repositorio se elimino correctamente.',
                    'success'
                )
            </script>
        @endif


        <script>
            $('.formulario-eliminar').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Usted se encuentra a punto de borrar un repositorio',
                    text: "¿Está seguro de eliminar este repositorio?",
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
