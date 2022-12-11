<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla tema
            'ver-tema',
            'crear-tema',
            'editar-tema',
            'borrar-tema',

            //Operacions sobre tabla galeria
            'ver-galeria',
            'crear-galeria',
            'editar-galeria',
            'borrar-galeria',
            
            //Operacions sobre tabla pronvincia
            'ver-pronvincia',
            'crear-pronvincia',
            'editar-pronvincia',
            'borrar-pronvincia',

            //Operacions sobre tabla canton
            'ver-canton',
            'crear-canton',
            'editar-canton',
            'borrar-canton',

            //Operacions sobre tabla persona
            'ver-persona',
            'crear-persona',
            'editar-persona',
            'borrar-persona',

            //Operacions sobre tabla tipoOrg
            'ver-tipoOrg',
            'crear-tipoOrg',
            'editar-tipoOrg',
            'borrar-tipoOrg',

            //Operacions sobre tabla organizacion
            'ver-organizacion',
            'crear-organizacion',
            'editar-organizacion',
            'borrar-organizacion',

            //Operacions sobre tabla cantonOrg
            'ver-cantonOrg',
            'crear-cantonOrg',
            'editar-cantonOrg',
            'borrar-cantonOrg',

            //Operacions sobre tabla categoria
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',

            //Operacions sobre tabla proyecto
            'ver-proyecto',
            'crear-proyecto',
            'editar-proyecto',
            'borrar-proyecto',

            //Operacions sobre tabla implicacion
            'ver-implicacion',
            'crear-implicacion',
            'editar-implicacion',
            'borrar-implicacion',

            //Operacions sobre tabla involucrado
            'ver-involucrado',
            'crear-involucrado',
            'editar-involucrado',
            'borrar-involucrado',

            //Operacions sobre tabla invProyecto
            'ver-invProyecto',
            'crear-invProyecto',
            'editar-invProyecto',
            'borrar-invProyecto',

            //Operacions sobre tabla tipoArticulo
            'ver-tipoArticulo',
            'crear-tipoArticulo',
            'editar-tipoArticulo',
            'borrar-tipoArticulo',

            //Operacions sobre tabla articulo
            'ver-articulo',
            'crear-articulo',
            'editar-articulo',
            'borrar-articulo',

            //Operacions sobre tabla autor
            'ver-autor',
            'crear-autor',
            'editar-autor',
            'borrar-autor',

            //Operacions sobre tabla carrera
            'ver-carrera',
            'crear-carrera',
            'editar-carrera',
            'borrar-carrera',

            //Operacions sobre tabla variable
            'ver-variable',
            'crear-variable',
            'editar-variable',
            'borrar-variable',

            //Operacions sobre tabla tipoTesis
            'ver-tipoTesis',
            'crear-tipoTesis',
            'editar-tipoTesis',
            'borrar-tipoTesis',

            //Operacions sobre tabla tipoLibro
            'ver-tipoLibro',
            'crear-tipoLibro',
            'editar-tipoLibro',
            'borrar-tipoLibro',

            //Operacions sobre tabla tesis
            'ver-tesis',
            'crear-tesis',
            'editar-tesis',
            'borrar-tesis',

            //Operacions sobre tabla libroRevista
            'ver-libroRevista',
            'crear-libroRevista',
            'editar-libroRevista',
            'borrar-libroRevista',

            //Operacions sobre tabla indicador
            'ver-indicador',
            'crear-indicador',
            'editar-indicador',
            'borrar-indicador',

            //Operacions sobre tabla etiqueta
            'ver-etiqueta',
            'crear-etiqueta',
            'editar-etiqueta',
            'borrar-etiqueta',

            //Operacions sobre tabla editorial
            'ver-editorial',
            'crear-editorial',
            'editar-editorial',
            'borrar-editorial',

            //Operacions sobre tabla dimension
            'ver-dimension',
            'crear-dimension',
            'editar-dimension',
            'borrar-dimension',
             //Operacions sobre tabla repositorio
             'ver-repositorio',
             'crear-repositorio',
             'editar-repositorio',
             'borrar-repositorio',
             'habilitar-repositorio'
        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}
