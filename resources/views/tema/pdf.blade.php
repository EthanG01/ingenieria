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
   
        
    
    <h2>Lista de Temas</h2>
   
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>Tema</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($temas as $tema)
                <tr>
                    <td>{{ $tema->tema }}</td>
                   
                </tr>
                
            @endforeach
        </tbody>
        
    </table>
    
    <hr>
</body>

</html>