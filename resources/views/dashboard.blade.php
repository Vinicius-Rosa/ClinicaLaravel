@extends('templates.template')

@section('content')

      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">

                <div class="card">
                  <div class="card-header">
                    <h6 class="text-uppercase mb-0">Lista de pacientes</h6>
                  </div>
                    <div class="card-body">
                    {{ csrf_field() }}
                    @if(sizeof($pacientes))
                      <table class="table card-text">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Sexo</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        
                          @foreach($pacientes as $paciente)
                              <tr>
                                <th scope="row"> {{ $paciente->id }} </th>
                                <td> {{ $paciente->name }} </td>
                                <td> {{ $paciente->nasc }} </td>
                                <td> {{ $paciente->sexo }} </td>
                                <td>
                                  <a href="{{ url("/dashboard/$paciente->id/edit") }}">
                                  <button class="btn btn-warning">
                                    <i class="far fa-edit"></i>
                                  </button>
                                  </a>
                                </td>
                                <td>
                                  <a id="js-del" href="{{ url("/dashboard/$paciente->id") }}">
                                    <button class="btn btn-danger">
                                      <i class="far fa-trash-alt"></i>
                                    </button>  
                                  </a>
                                </td>
                              </tr>
                          @endforeach

                        </tbody>
                      </table>
                      @else
                            <div class="">
                                <h3>Ok, acho que não existem registros de pacientes.</h3>
                                <p>Vamos lá, comece adicionando alguns!</p>
                            </div>
                        @endif
                      {{ $pacientes->links() }}
                </div>
            </div>
              <div class="mt-3">
                <a href="{{ url('/dashboard/create') }}">
                <button class="btn btn-primary">
                  <i class="fas fa-plus-circle"></i> Adicionar Novo
                </button>  
                </a>
              </div>
            </section>
          </div>
        </div>
    </div>

@endsection