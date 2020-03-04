<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Laravel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="{{ url('assets/css/orionicons.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ url('assets/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png?3') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      
      <!-- NAV -->

      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="/dashboard" class="navbar-brand font-weight-bold text-uppercase text-base">Clínica Laravel</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <!-- Dropdown -> Editar perfil | Sair -->
          <li class="nav-item dropdown ml-auto">
            <a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
              <!-- <strong class="text-muted text-gray-500">Pafuncio Figueiredo</strong> -->
              @if(isset($user))
                <strong class="text-muted text-gray-500">{{ $user->name }}</strong>
              @else
                <strong class="text-muted text-gray-500">Pafuncio Figueiredo</strong>
              @endif
              <!-- <img src="img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"> -->
          </a>
            
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item">
              @if(isset($user))
                  <strong class="d-block text-uppercase headings-font-family">{{ $user->name }}</strong>
                @else
                  <strong class="d-block text-uppercase headings-font-family">Pafuncio Figueiredo</strong>
                @endif  
                
                @if(isset($user))
                    <small>{{ $user->cargo }}</small>
                  @else
                    <small>Administrador</small>
                  @endif  

              </a>
              <div class="dropdown-divider"></div><a href="{{ url('logout') }}" class="dropdown-item">Sair</a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- NAV END -->

    </header>

    <!-- CONTENT DIV -->
    <div class="d-flex align-items-stretch">
      
      <!-- SIDEBAR -->
      
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">Principal</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="{{ url('/dashboard') }}" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
              <li class="sidebar-list-item"><a href="{{ url("/perfil/$user->id/edit") }}" class="sidebar-link text-muted"><i class="o-user-1 mr-3 text-gray"></i><span>Perfil</span></a></li>
              <hr>
              <li class="sidebar-list-item"><a href="{{ url('logout') }}" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Sair</span></a></li>
        </ul>
      </div>

      <!-- SIDEBAR END -->

      @yield('content')

        <!-- FOOTER -->


        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <a href="https://www.instagram.com/vrosa.jpg/?hl=pt-br">
                  <p class="mb-2 mb-md-0">Vinicius Rosa &copy; 2020</p>
                </a>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>

      <!-- CONTENT END -->
    </div>
    <!-- JavaScript files-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

    <script src="{{ url('assets/js/script.js') }}"></script>

    <script>
    //   function delAccount(event) {
    //     event.preventDefault();
    //     let token = doc.getElementsByName("_token")[0].value;
    //     if(
            
    //         confirm("Deseja mesmo apagar?")

    //         ){
    //         let ajax = new XMLHttpRequest();
    //         ajax.open("DELETE", event.target.parentNode.href);

    //         ajax.setRequestHeader('X-CSRF-TOKEN', token);
    //         ajax.onreadystatechange = function (){
    //             if(ajax.readyState === 4 && ajax.status === 200){
    //                 // win.location.href="/";
    //                 console.log('dale');
    //             }
                
    //         };
    //         ajax.send();
    //     } else {
    //         return false;
    //     }
    // }
    </script>

  </body>
</html>