@extends('templates.unloged')

@section('content')

    <div class="page-holder d-flex align-items-center">
      <div class="container">

        <div class="row align-items-center py-5">
          <div class="col-lg-5 mx-auto px-lg-4">
            <h1 class="text-base text-primary text-uppercase mb-4">Clínica Laravel</h1>
            <h2 class="mb-4">Seja bem vindo!</h2>
            <p class="text-muted">Para se conectar conosco entre com suas informações nos campos abaixo :D</p>

            <!-- @if ($errors->any)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                  @endforeach
                </ul>
              </div>
            @endif -->

            @if(session('msg'))
              <div class="alert alert-danger">
                {{ session('msg') }}
              </div>
            @endif

            <form id="loginForm" method="POST" action="{{ url('/login') }}" class="mt-4">
            {{ csrf_field() }}
              <div class="form-group mb-4">
                <input type="email" name="email" placeholder="Email" class="form-control border-0 shadow form-control-lg" required>
              </div>
              <div class="form-group mb-4">
                <input type="password" name="password" placeholder="Senha" class="form-control border-0 shadow form-control-lg text-violet" required>
              </div>
              <button type="submit" class="btn btn-primary btn- shadow px-5">Entrar</button>
            </form>
            <a href="{{ url('cadastro') }}">
              <p class="mt-3">Não possui uma conta? Cadastre-se</p>
            </a>
          </div>
        </div>

      </div>
    </div>

@endsection