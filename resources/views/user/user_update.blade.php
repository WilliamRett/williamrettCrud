
<!doctype html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Usuario</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/form-validation.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">
        <a class="btn btn-outline-primary" href="http://127.0.0.1:8000">William Rett</a>
        </h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="http://127.0.0.1:8000/user">Lista de Usuarios</a>
        </nav>
        <a class="btn btn-outline-primary" href="http://127.0.0.1:8000/user/create">Cadastro</a>
      </div>
  
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Cadastro de Usuario </h1>     
      </div>

    <div class="container bg-light">
      <div class="row">    
        <div class="col-md-12 order-md-1" style="padding:15px;">
          <h4 class="mb-3">Dados Usuario</h4>
            <form class="needs-validation" >
              <div class="row">
                <div class="col-md-6 mb-3">
                  @foreach ($users as $user)
                  <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="" value="{{$user->name}}" required>
                  <div class="invalid-feedback">
                    Valid Nome is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="document">CPF|CNPJ</label>
                  <input type="text" class="form-control" id="document" placeholder="" value="{{$user->document}}"  required>
                  <div class="invalid-feedback">
                    Valid cpf/cnpj is required.
                  </div>
                </div>
              </div>
              <div class="mb-3">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" placeholder="password" value="{{$user->password}}"  required>
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{$user->email}}"  required>
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="mb-3">
                  <label for="latitude">Latitude</label>
                  <input type="text" class="form-control" id="latitude" placeholder="22º 55´S"  value="{{$user->latitude}}" required>
                  <div class="invalid-feedback">
                    P Please enter a valid latitude.
                  </div>
                </div>
                <div class="mb-3">
                  <label for="logitude">Longitude</label>
                  <input type="text" class="form-control" id="longitude" placeholder="34º 53´W" value="{{$user->longitude}}" required>
                  <div class="invalid-feedback">
                      Please enter a valid logitude.
                  </div>                  
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="rec({{$user->id}})">Atualizar Usuario</button>
              </form>                       
          @endforeach
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 William Rett</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
              var name = document.getElementById("name").value;
              var document = document.getElementById("document").value;
              var password = document.getElementById("password").value;
              var email = document.getElementById("email").value;
              var latitude = document.getElementById("latitude").value;
              var longitude = document.getElementById("longitude").value;
              var url = 'http://127.0.0.1:8000/user/'
              var rec = function(){
                        $.ajax({
                          url: url+id,
                          method:'POST',
                          dataType :'json',
                          data : $(this).serialize(),
                          success :  function(response){
                            alert(response);                   
                          },
                          error:function(response){
                            alert(response);
                          },
                        });
                      }
   
   
   </script>
  </body>
</html>
