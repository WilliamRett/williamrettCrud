<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <style>
    .td_dados{
        text-align: center; 
        font-weight: 500; 
        font-size: 16px;
    }    
    .tr_dados{
        border-bottom: 2px solid #ccc; text-align: center; font-weight: 600; font-size: 14px;
    }
    </style>
 <link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>
<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">William Rett</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="http://127.0.0.1:8000/user">Lista de Usuarios</a>
        </nav>
        <a class="btn btn-outline-primary" href="http://127.0.0.1:8000/user">Cadastro</a>
      </div>
  
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Lista de Usuarios </h1>     
      </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF/CNPJ</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Atualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->document}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->latitude}}</td>
                            <td>{{$user->longitude}}</td>
                            <td><a href="http://127.0.0.1:8000/user/{{$user->id}}">Deletar</a></td>
                            <td><a href="http://127.0.0.1:8000/user/{{$user->id}}">Update</td>
                        </tr>
                        @endforeach
                  </tbody>
                  </table>
                 </div>
        </div>
        </div>
</body>
</html>