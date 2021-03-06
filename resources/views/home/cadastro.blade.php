@extends('templates.unloged')

@section('content')
    <div class="page-holder d-flex align-items-center">
      <div class="container">

        <div class="row align-items-center py-5">
          <div class="col-lg-5 mx-auto px-lg-4">
            <h1 class="text-base text-primary text-uppercase mb-4">Clínica Laravel</h1>
            <h2 class="mb-4">Faça parte do time!</h2>
            <p class="text-muted">Junte-se a nós e cadastre-se preenchendo os campos abaixo :D</p>
            
            <form id="loginForm" method="POST" action="{{ url('cadastro') }}" class="mt-4">
              {{ csrf_field() }}
              <div class="form-group mb-4">
                <input type="text" name="name" id="name" placeholder="Nome" class="form-control border-0 shadow form-control-lg">
                <small class="form-text text-muted ml-3">Exemplo: Vinicius Rosa R. de Oliveira</small>
              </div>
              <div class="form-group mb-4">
                <input type="text" name="cargo" id="cargo" placeholder="Cargo" class="form-control border-0 shadow form-control-lg">
                <small class="form-text text-muted ml-3">Exemplo: Administrador</small>
              </div>
              <div class="form-group mb-4">
                <input type="email" name="email" id="email" placeholder="Email" class="form-control border-0 shadow form-control-lg">
                <small class="form-text text-muted ml-3">Exemplo: vinicius-rosa@gmail.com</small>
              </div>
              <div class="form-group mb-4">
                <input type="password" name="password" id="password" placeholder="Senha" class="form-control border-0 shadow form-control-lg text-violet">
              </div>
              <button type="submit" class="btn btn-primary btn- shadow px-5">Cadastrar</button>
            </form>
            
            <a href="{{ url('/') }}">
              <p class="mt-3">Já possui uma conta? Conecte-se!</p>
            </a>
          </div>
        </div>

      </div>
    </div>

@endsection