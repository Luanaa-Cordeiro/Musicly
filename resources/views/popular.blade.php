
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
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relatórios</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <img src="{{ asset('assets/imagens/usuario-de-perfil.png')}}" alt="">
                       <button>sair</button>
                    </div>
                </div>
            </nav>


@if(session()->has('message'))
    <div class="alerta alert-success alert alert-dismissible">
        {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class='adicionar'>
    <h2>Populares</h2>
    <a href="{{route('populars.create')}}"><button>Adicionar</button></a>
</div>

<div class="table-wrapper">
                <table class="table table-responsive table-striped table-hover">
                  <thead class="">
                    <tr>
                      <th style="background-color:#6d7fcc; color:white;">Id</th>
                      <th style="background-color:#6d7fcc; color:white;">Música</th>
                      <th style="background-color:#6d7fcc; color:white;">Álbum</th>
                      <th style="background-color:#6d7fcc; color:white;">Artista</th>
                      <th style="background-color:#6d7fcc; color:white;">Gênero</th>
                      <th style="background-color:#6d7fcc; color:white;" id='ação'>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
    @foreach($populars as $popular)
    <tr>
        <td>{{$popular->id}}</td>
        <td>{{$popular->musica->nome}}</td>
        <td>{{$popular->album->nome}}</td>
        <td>{{$popular->artista->nome}}</td>
        <td>{{$popular->genero->nome}}</td>
        <td id='botões'>
            <button id="editar"><a href="{{ route('populars.edit', ['popular' => $popular->id]) }}">Editar</a></button>
            <button id="deletar"><a href="{{route('populars.show',['popular' => $popular->id])}}">Mostrar</a></button>
        </td>
    </tr>
    @endforeach
</tbody>
        </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
</body>
</html>








