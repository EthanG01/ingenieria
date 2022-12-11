@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-md-3 col-xl-3">
                                    
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                @php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                                <h5>Temas</h5>                                               
                                                @php
                                                 use App\Models\Tema;
                                                $cant_temas = Tema::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-th f-left""></i><span>{{$cant_temas}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/temas" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                                <h5>Galería</h5>                                               
                                                @php
                                                 use App\Models\Galeria;
                                                $cant_galerias = Galeria::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-images f-left"></i><span>{{$cant_galerias}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/galerias" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-p order-card">
                                            <div class="card-block">
                                                <h5>Provincias</h5>                                               
                                                @php
                                                 use App\Models\Provincia;
                                                $cant_provincias = Provincia::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-building f-left"></i><span>{{$cant_provincias}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/provincias" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-p order-card">
                                            <div class="card-block">
                                                <h5>Cantones</h5>                                               
                                                @php
                                                 use App\Models\Canton;
                                                $cant_cantonces = Canton::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-home f-left"></i><span>{{$cant_cantonces}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/cantons" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-p order-card">
                                            <div class="card-block">
                                                <h5>Personas</h5>                                               
                                                @php
                                                 use App\Models\Persona;
                                                $cant_personas = Persona::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-user f-left"></i><span>{{$cant_personas}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/personas" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-p order-card">
                                            <div class="card-block">
                                                <h5>Tipo Organización</h5>                                               
                                                @php
                                                 use App\Models\TipoOrganizacion;
                                                $cant_tipoOrganizacion = TipoOrganizacion::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-th-list f-left"></i><span>{{$cant_tipoOrganizacion}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tipo-organizacions" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-y order-card">
                                            <div class="card-block">
                                                <h5>Organizaciones</h5>                                               
                                                @php
                                                 use App\Models\Organizacion;
                                                $cant_organizaciones = Organizacion::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-sitemap f-left"></i><span>{{$cant_organizaciones}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/organizacions" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-y order-card">
                                            <div class="card-block">
                                                <h5>Cantón/Org</h5>                                               
                                                @php
                                                 use App\Models\CantonOrganizacion;
                                                $cant_cantonOrganizacion = CantonOrganizacion::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-directions f-left"></i><span>{{$cant_cantonOrganizacion}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="canton-organizacions" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-y order-card">
                                            <div class="card-block">
                                                <h5>Categorias</h5>                                               
                                                @php
                                                 use App\Models\Categoria;
                                                $cant_categorias = Categoria::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-tasks f-left"></i><span>{{$cant_categorias}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/categorias" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-y order-card">
                                            <div class="card-block">
                                                <h5>Proyectos</h5>                                               
                                                @php
                                                 use App\Models\Proyecto;
                                                $cant_proyectos = Proyecto::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-campground f-left"></i><span>{{$cant_proyectos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/proyectos" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Implicaciones</h5>                                               
                                                @php
                                                 use App\Models\Implicacion;
                                                $cant_implicaciones = Implicacion::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-centos f-left"></i><span>{{$cant_implicaciones}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/implicacions" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Involucrados</h5>                                               
                                                @php
                                                 use App\Models\Involucrado;
                                                $cant_involucrados = Involucrado::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-street-view f-left"></i><span>{{$cant_involucrados}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/involucrados" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h6>Involucrado/Proyecto</h6>                                               
                                                @php
                                                 use App\Models\InvolucradoProyecto;
                                                $cant_involucradoProyectos = InvolucradoProyecto::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_involucradoProyectos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/involucrado-proyectos" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Autores</h5>                                               
                                                @php
                                                 use App\Models\Autor;
                                                $cant_Autor = Autor::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Autor}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/autors" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-o order-card">
                                            <div class="card-block">
                                                <h5>Dimensiones</h5>                                               
                                                @php
                                                 use App\Models\Dimension;
                                                $cant_Dimension = Dimension::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Dimension}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/dimensions" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-o order-card">
                                            <div class="card-block">
                                                <h5>Variables</h5>                                               
                                                @php
                                                 use App\Models\Variable;
                                                $cant_Variable = Variable::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Variable}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/variables" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-o order-card">
                                            <div class="card-block">
                                                <h5>Indicadores</h5>                                               
                                                @php
                                                 use App\Models\Indicador;
                                                $cant_Indicador= Indicador::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Indicador}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/indicadors" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-o order-card">
                                            <div class="card-block">
                                                <h5>Etiquetas</h5>                                               
                                                @php
                                                 use App\Models\Etiqueta;
                                                $cant_Etiqueta = Etiqueta::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Etiqueta}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/etiquetas" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-or order-card">
                                            <div class="card-block">
                                                <h5>Tipo artículo</h5>                                               
                                                @php
                                                 use App\Models\TipoArticulo;
                                                $cant_TipoArticulo = TipoArticulo::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_TipoArticulo}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tipo-articulos" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-or order-card">
                                            <div class="card-block">
                                                <h5>Artículos</h5>                                               
                                                @php
                                                 use App\Models\Articulo;
                                                $cant_Articulo = Articulo::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Articulo}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/articulos" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-or order-card">
                                            <div class="card-block">
                                                <h5>Carerra</h5>                                               
                                                @php
                                                 use App\Models\Carrera;
                                                $cant_Carrera = Carrera::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Carrera}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/carreras" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-or order-card">
                                            <div class="card-block">
                                                <h5>Tipo tesis</h5>                                               
                                                @php
                                                 use App\Models\TipoTesi;
                                                $cant_TipoTesi = TipoTesi::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_TipoTesi}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tipo-tesis" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Tesis</h5>                                               
                                                @php
                                                 use App\Models\Tesi;
                                                $cant_Tesi = Tesi::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Tesi}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tesis" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Editoriales</h5>                                               
                                                @php
                                                 use App\Models\Editorial;
                                                $cant_Editorial = Editorial::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_Editorial}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tipo-tesis" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Tipo Lib/Rev</h5>                                               
                                                @php
                                                 use App\Models\TipoLibro;
                                                $cant_TipoLibro = TipoLibro::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_TipoLibro}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tipo-libros" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Libros/Revistas</h5>                                               
                                                @php
                                                 use App\Models\LibroRevista;
                                                $cant_LibroRevista = LibroRevista::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fab fa-connectdevelop f-left"></i><span>{{$cant_LibroRevista}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/libro-revistas" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

