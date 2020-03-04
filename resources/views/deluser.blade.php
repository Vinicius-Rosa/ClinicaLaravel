@extends('templates.template')

@session('content')

<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">

                <!-- Pacientes Form-->
                  <!-- <div class="col-lg-10 mb-5"> -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="h6  mb-0">Deseja mesmo nos abandonar? :(</h3>
                      </div>

                      <div class="card-body">
                        <p>Deseja mesmo deletar o usuário atual? Ao fazê-lo não haverá como reverter a ação. Esperamos que esteja ciente disso.</p>
                        <hr>
                        <br>
                        <a href="{{ url("/perfil/$user->id") }}">
                          <button class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                            Deletar Perfil
                          </button>
                        </a>

                        <a href="{{ url('/dashboard') }}">
                          <button class="btn btn-secondary">
                            Cancelar
                          </button>
                        </a>
                      </div>
                    </div>


            
              
            </section>
          </div>
        </div>

@endsession