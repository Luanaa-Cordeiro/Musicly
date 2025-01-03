
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <title>Home</title>
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Musicly</h3>
            </div>

            <ul class="list-unstyled components">
            <li>
                    <a href="{{route('home')}}">Início</a>
                </li>
               
                <li>
                    <a href="{{route('artistas.index')}}">Artistas</a>
                </li>
                <li>
                    <a href="{{route('generos.index')}}">Géneros</a>
                </li>
                <li>
                    <a href="{{route('albuns.index')}}">Álbuns</a>
                </li>
                <li>
                    <a href="{{route('musicas.index')}}">Músicas</a>
                </li>
                <li>
                    <a href="{{route('populars.index')}}">Populares</a>
                </li>
                
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <img src="{{ asset('assets/imagens/usuario-de-perfil.png')}}" alt="">
                       <div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  {{ auth()->user()->name }}
  </a>

  <ul class="dropdown-menu">
  <form action="{{ route('logout') }}" method="POST" id="logout-form">
    @csrf
    <button type="submit" class="btn">Sair</button>
</form>
  </ul>
</div>
                    </div>
                </div>
            </nav>

            <h2>Bem-Vindo(a) {{ auth()->user()->name }}!</h2>

            <div class="line"></div>

            <div class="cartoes_titulo">
            <h3>Artistas</h3>
            <img src="{{ asset('assets/imagens/microfone-com-fio.png')}}" alt="">
            </div>
            <div class="cartoes">
            <p>Quantidade: {{ $total_artistas }}</p>
            <a href="{{route('artistas.index')}}"><button>Conferir</button></a>
            </div>

            <div class="line"></div>

            <div class="cartoes_titulo">
            <h3>Gêneros</h3>
            <img src="{{ asset('assets/imagens/cd.png')}}" alt="">
            </div>
            <div class="cartoes">
            <p>Quantidade: {{ $total_generos }}</p>
            <a href="{{route('generos.index')}}"><button>Conferir</button></a>
            </div>

            <div class="line"></div>

            <div class="cartoes_titulo">
            <h3>Álbuns</h3>
            <img src="{{ asset('assets/imagens/album-de-musica.png')}}" alt="">
            </div>
            <div class="cartoes">
            <p>Quantidade: {{ $total_albuns }}</p>
            <a href="{{route('albuns.index')}}"><button>Conferir</button></a>
            </div>

            <div class="line"></div>

            <div class="cartoes_titulo">
            <h3>Músicas</h3>
            <img src="{{ asset('assets/imagens/reprodutor-de-musica.png')}}" alt="">
            </div>
            <div class="cartoes">
            <p>Quantidade: {{ $total_musicas }}</p>
            <a href="{{route('musicas.index')}}"><button>Conferir</button></a>
            </div>

            <div class="line"></div>

            <div class="cartoes_titulo">
            <h3>Populares</h3>
            <img src="{{ asset('assets/imagens/reprodutor-de-musica.png')}}" alt="">
            </div>
            <div class="cartoes">
            <p>Quantidade: {{ $total_popular }}</p>
            <a href="{{route('populars.index')}}"><button>Conferir</button></a>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
</body>
</html>


