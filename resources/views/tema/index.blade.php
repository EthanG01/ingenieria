<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Tema</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">   
                      @can('crear-tema')
                      <a class="btn btn-warning" href="{{ route('temas.create') }}">Crear nuevo</a>
                      @endcan
                      <a class="btn btn-danger" href="{{ route('temas.pdf') }}">PDF</a>
                      <a class="btn btn-success" href="{{ route('temas.excel') }}">EXCEL</a>

                            {{-- <div class="float-right">
                                    <a href="{{ route('temas.pdf') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="right">
                                        {{ __('PDF') }}
                                    </a>
                            </div>
                            &nbsp; --}}
                            {{-- <div class="float-right">
                                    <a href="{{ route('temas.excel') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="right">
                                        {{ __('EXCEL') }}
                                    </a>
                            </div> --}}
                            &nbsp;
                      <form class="form-inline my-2 my-lg-0 float-right" role="search">
                        <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar tema"
                            aria-label="Search">
                            &nbsp;
                            <button class="btn btn-warning" type="text">Buscar</button>
                    </form>
                        </div>
                    </div>
                    @if ($message = Session::get('warning'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped mt-2">
                        <thead style="background-color:#6777ef">       
                        <th style="color:#fff;">No</th>
                        <th style="color:#fff;">Tema</th>
                        <th style="color:#fff;">Acciones</th>
                        <th></th>
                                   
                                </thead>
                                <tbody>
                                    @foreach ($temas as $tema)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tema->tema }}</td>

                                            <td>
                                                <form action="{{ route('temas.destroy',$tema->id) }}"  class="formulario-eliminar" 
                                                    
                                                    method="POST">

                                                    <a class="btn btn-sm btn-primary " href="{{ route('temas.show',$tema->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    @can('editar-tema')
                                                    <a class="btn btn-sm btn-success" href="{{ route('temas.edit',$tema->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-tema')
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
                {!! $temas->links() !!}
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
                'El tema se elimino correctamente.',
                'success'
            )
        </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar un tema',
                text: "¿Está seguro de eliminar este tema?",
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
