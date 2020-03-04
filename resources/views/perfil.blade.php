@extends('templates.template')

@section('content')
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">

                <!-- Pacientes Form-->
                  <!-- <div class="col-lg-10 mb-5"> -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Perfil</h3>
                        <!-- <h3 class="h6 text-uppercase mb-0">{{ $user->name }}</h3> -->
                      </div>
                      <div class="card-body">
                        <p>Edite as suas informações modificando os campos abaixo</p>
                        <hr>
                        <br>
                        <form class="form-horizontal" id="formPerfil" method="POST" action="{{ url("perfil/$user->id") }}">
                          {{ method_field('PUT') }}

                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-md-3 form-control-label">Nome</label>
                            <div class="col-md-9">
                              <input id="name" name="name" type="text" placeholder="Nome Completo" class="form-control form-control-success" value="{{ $user->name }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 form-control-label">Cargo</label>
                            <div class="col-md-9">
                              <input id="cargo" name="cargo" type="text" placeholder="Cargo" class="form-control form-control-success" value="{{ $user->cargo }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 form-control-label">Email</label>
                            <div class="col-md-9">
                              <input id="email" name="email" type="email" placeholder="Email" class="form-control form-control-success" value="{{ $user->email }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 form-control-label">Senha</label>
                            <div class="col-md-9">
                              <input id="" type="password" name="password" placeholder="Senha" class="form-control form-control-success" value="{{ $user->password }}">
                            </div>
                          </div>
                          <div class="form-group row">       
                            <div class="col-md-9 ml-auto">
                              <input type="submit" value="Salvar" class="btn btn-primary">
                            </div>
                          </div>
                        </form>

                        <a href="{{ url("/perfil/$user->id/destroy") }}">
                          <button class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                            Deletar Perfil
                          </button>
                        </a>
                      </div>
                    </div>
                  <!-- </div> -->
              
            </section>
          </div>
        </div>
      </div>

@endsection