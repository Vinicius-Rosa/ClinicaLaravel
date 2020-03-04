@extends('templates.unloged')

@section('content')
    <div class="page-holder d-flex align-items-center">
      <div class="container">

        <div class="row align-items-center py-5">
          <div class="col-lg-5 mx-auto px-lg-4">
            <h1 class="text-base text-primary text-uppercase mb-4">Clínica Laravel</h1>
            <h2 class="mb-4">Faça parte do time!</h2>
            <p class="text-muted">Junte-se a nós e cadastre-se preenchendo os campos abaixo :D</p>
            
            <form id="loginForm" action="index.html" class="mt-4">
              <div class="form-group mb-4">
                <input type="text" name="username" placeholder="Nome" class="form-control border-0 shadow form-control-lg">
                <small class="form-text text-muted ml-3">Exemplo: Vinicius Rosa R. de Oliveira</small>
              </div>
              <div class="form-group mb-4">
                <input type="text" name="username" placeholder="Cargo" class="form-control border-0 shadow form-control-lg">
                <small class="form-text text-muted ml-3">Exemplo: Administrador</small>
              </div>
              <div class="form-group mb-4">
                <input type="email" name="username" placeholder="Email" class="form-control border-0 shadow form-control-lg">
                <small class="form-text text-muted ml-3">Exemplo: vinicius-rosa@gmail.com</small>
              </div>
              <div class="form-group mb-4">
                <input type="password" name="passowrd" placeholder="Senha" class="form-control border-0 shadow form-control-lg text-violet">
              </div>
              <button type="submit" class="btn btn-primary btn- shadow px-5">Entrar</button>
            </form>
            
            <a href="login.html">
              <p class="mt-3">Já possui uma conta? Conecte-se!</p>
            </a>
          </div>
        </div>

      </div>
    </div>

@endsection