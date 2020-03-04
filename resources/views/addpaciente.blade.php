@extends('templates.template')

@section('content')

      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">

                <!-- Pacientes Form-->
                  <!-- <div class="col-lg-10 mb-5"> -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">
                        @if(isset($paciente))
                          Editar paciente
                        @else
                          Adicionar paciente
                        @endif
                        </h3>
                      </div>
                      
                      <div class="card-body">
                         @if(isset($paciente))
                            <p>Edite um paciente existente modificando os campos abaixo.</p>
                          @else
                            <p>Adicione um novo paciente preenchendo o formulário abaixo</p>
                          @endif
                        <hr>
                        <br>
                      
                      @if(isset($errors) && count($errors)>0)
                        <div class="text-center mt-4 mb-4 p-2 alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                      @endif
                              <!-- FORM -->

                        @if(isset($paciente))
                        <form class="form-horizontal" name="formEditPaciente" id="formEditPaciente" method="POST" action="{{ url("dashboard/$paciente->id") }}">
                        {{ method_field('PUT') }}
                        @else
                        <form class="form-horizontal" name="formPaciente" id="formPaciente" method="POST" action="{{ url('dashboard') }}">
                        @endif
                        {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-md-3 form-control-label">Nome</label>
                            <div class="col-md-9">
                              <input type="text" name="name" id="name" placeholder="Nome Completo" class="form-control form-control-success" value="{{ isset($paciente->name) ? $paciente->name : '' }}"><small class="form-text text-muted ml-3">Exemplo: Vinicius Rosa R. de Oliveira</small>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Data de Nascimento</label>
                            <div class="col-md-9">
                              <input type="date" name="nasc" id="nasc" class="form-control form-control-warning" value="{{ isset($paciente->nasc) ? $paciente->nasc : '' }}"><small class="form-text text-muted ml-3">Exemplo: 21/10/1999</small>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 form-control-label">Sexo</label>
                            <div class="col-md-9 select mb-3">
                              <select name="sexo" id="sexo" class="form-control" value="{{ isset($paciente->sexo) ? $paciente->sexo : '' }}">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outro">Outro</option>
                              </select><small class="form-text text-muted ml-3">Exemplo: Masculino</small>
                            </div>
                          </div>
                          <div class="form-group row">       
                            <div class="col-md-9 ml-auto">
                              <input type="submit" value="@if(isset($paciente))Salvar @else Adicionar @endif" class="btn btn-primary">
                            </div>
                          </div>
                        </form>
                        <!-- END FORM -->
                      </div>
                    </div>
                  <!-- </div> -->

                  <div class="mt-3">
                      <a href="{{ url('/dashboard') }}">
                      <button class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i> Retornar
                      </button>  
                      </a>
                    </div>
            </div>
              
            </section>
          </div>
        </div>
    </div>

@endsection