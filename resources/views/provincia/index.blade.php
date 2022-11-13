<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Provincia</h3>
      </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body"> 
                      @can('crear-pronvincia')
                      <a class="btn btn-warning" href="{{ route('provincias.create') }}">Crear nueva</a> 
                      @endcan
                      &nbsp;
                      <form class="form-inline my-2 my-lg-0 float-right" role="search">
                        <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar provincia"
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
                        <th style="color:#fff;">Nombre</th> 
                        <th style="color:#fff;">Acciones</th>      
                        <th></th>
                                   
                    </thead>
                        <tbody>
                            @foreach ($provincias as $provincia)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    
                                    <td>{{ $provincia->nombreProvincia }}</td>

                                    <td>
                                        <form action="{{ route('provincias.destroy',$provincia->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('provincias.show',$provincia->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-pronvincia')
                                            <a class="btn btn-sm btn-success" href="{{ route('provincias.edit',$provincia->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-pronvincia')
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
                {!! $provincias->links() !!}
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
                'La provincia se elimino correctamente.',
                'success'
            )
        </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar una provincia',
                text: "¿Está seguro de eliminar esta provincia?",
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