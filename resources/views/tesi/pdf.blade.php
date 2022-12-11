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
   
        
    
    <h2>Lista de tesis</h2>
   
    <table>
        <thead>
        <th style="color:#fff;">Carrera</th>
        <th style="color:#fff;">Tipotesis</th>
        <th style="color:#fff;">Autor</th>
        <th style="color:#fff;">Nombre</th>
        <th style="color:#fff;">Etiqueta</th>
        <th style="color:#fff;">Fecha de publicación</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tesis as $tesi)
                        <tr>
                            
                            
                            <td>{{ $tesi->Carrera->nombreCarrera }}</td>
                            <td>{{ $tesi->TipoTesi->nombreTesis }}</td>
                            <td>{{ $tesi->Autor->nombreAutor }} {{ $tesi->Autor->apellidoAutor1 }}</td>
                            <td>{{ $tesi->nombreTes }}</td>
                            <td>{{ $tesi->Etiqueta->nombreEtiqueta}}</td>
                            <td>{{ $tesi->fechaPublicacionTes }}</td>

                        
                        </tr>
                    @endforeach
                </tbody>
            </table>

    
</body>

</html>