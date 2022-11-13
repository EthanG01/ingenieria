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
   
        
    
    <h2>Lista de involucrado</h2>
   
    <table>
        <thead>
        <th style="color:#fff;">Involucrado</th>
        <th style="color:#fff;">Organizacion</th>
        <th style="color:#fff;">Tipo</th>
        <th style="color:#fff;">Provincia</th>
        <th style="color:#fff;">Canton</th>
        <th style="color:#fff;">Direccion</th>
        <th style="color:#fff;">Implicacion</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($involucrados as $involucrado)
                        <tr>
                           
                            
                            <td>{{ $involucrado->Persona->nombrePersona }} {{ $involucrado->Persona->apellido1 }} {{ $involucrado->Persona->apellido2 }} </td>
                          
                           <td>{{ $involucrado->CantonOrganizacion->Organizacion->nombreOrganizacion }}</td>
                           <td>{{ $involucrado->CantonOrganizacion->Organizacion->TipoOrganizacion->nombreTipoOrganizacion }} </td>
                            <td>{{ $involucrado->CantonOrganizacion->Canton->Provincia->nombreProvincia}}</td>
                            <td>{{ $involucrado->CantonOrganizacion->Canton->nombreCanton}}</td>
                            <td>{{ $involucrado->CantonOrganizacion->direccion}}</td>
                            <td>{{ $involucrado->Implicacion->nombreImplicacion }}</td>

                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
</body>

</html>