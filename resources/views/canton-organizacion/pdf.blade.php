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
   
        
    
    <h2>Lista de Organizaciones</h2>
   
    <table>
        <thead>
                     
        <th style="color:#fff;">Organización</th>
        <th style="color:#fff;">Provincia</th>
        <th style="color:#fff;">Cantón</th>
        <th style="color:#fff;">Dirección</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cantonOrganizacions as $cantonOrganizacion)
                        <tr>
                            <td>{{ $cantonOrganizacion->Organizacion->nombreOrganizacion }}</td>
                            <td>{{ $cantonOrganizacion->Canton->Provincia->nombreProvincia }}</td>
                            <td>{{ $cantonOrganizacion->Canton->nombreCanton }}</td>
                            <td>{{ $cantonOrganizacion->direccion }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
</body>

</html>