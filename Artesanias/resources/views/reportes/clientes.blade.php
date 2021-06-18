<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
         h1{
             text-align:center;
             color:dodgerblue;
         }
         thead{
             background-color:#fcfcfc;
             width:100%;
             height:50px;
         }
    </style>
</head>
<body>
    <h1>REPORTE DE CLIENTES DEL {{ $fecha}}</h1>
    <table>
    <thead>
              <tr>
              <th style="border-bottom: 1px solid;">Nombre</th>
              <th style="padding-left: 10px; border-left: 1px solid; border-bottom: 1px solid;">Email</th>
              <th style="padding-left: 10px; border-left: 1px solid; border-bottom: 1px solid;">Address</th>
              <th style="padding-left: 10px; border-left: 1px solid; border-bottom: 1px solid;">City</th>

              <th></th>
              </tr>
              </thead>
              <tbody>
              </tbody>
              @foreach($datos as $p)
               <tr>

                 <td>{{ $p->name }}</td>
                 <td style="padding-left: 10px; border-left: 1px solid;">{{ $p->email }}</td>
                 <td style="padding-left: 10px; border-left: 1px solid;">{{ $p->address }}</td>
                 <td style="padding-left: 10px; border-left: 1px solid;">{{ $p->city }}</td>
                 <td>
                 </tr>
                 @endforeach
    </table>
</body>

</html> 