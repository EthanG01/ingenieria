<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Observatorio SRCH</title>
        
        <style>
      body{
       
    font-family: Arial;
}
table{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
}
h2{
    text-align: center;
}
th, td{
    border: solid 2px  #0f362d;
    padding: 20px;
}
thead {
    background-color: #246355;
    border-bottom: solid 5px #0f362d;
    color: white;
}
tr:nth-child(even){
    background-color: #e0e0e0;
}
	hr{
		page-break-after: always;
		border: none;
		margin: 0;
		padding: 0;
	}
        </style>
</head>
<body>
   
        
    
    <h2>Lista de articulos</h2>
   
    <table>
        <thead>
        <th style="color:#fff;">Dimensión</th>
        <th style="color:#fff;">Variable</th>
        <th style="color:#fff;">Indicador</th>
        <th style="color:#fff;">Tipo</th>
        <th style="color:#fff;">Autor</th>
        <th style="color:#fff;">Nombre</th>
        {{-- <th style="color:#fff;">Descripción</th> --}}
        <th style="color:#fff;">Etiqueta</th>
        <th style="color:#fff;">Doi</th>
        <th style="color:#fff;">Fecha publicación</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->Indicador->Variable->Dimension->nombreDimension }}</td>
                            <td>{{ $articulo->Indicador->Variable->nombreVariable }}</td>
                            <td>{{ $articulo->Indicador->nombreIndicador }}</td>
                            <td>{{ $articulo->TipoArticulo->nombreArticulo }}</td>
                            <td>{{ $articulo->Autor->nombreAutor }} {{ $articulo->Autor->apellidoAutor1 }}</td>
                            <td>{{ $articulo->nombreArt }}</td>
                            {{-- <td>{{ $articulo->descripcionArt }}</td> --}}
                            <td>{{ $articulo->Etiqueta->nombreEtiqueta }}</td>
                            <td>{{ $articulo->doi }}</td>
                            <td>{{ $articulo->fechaPublicacionArt }}</td>

                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
</body>

</html>