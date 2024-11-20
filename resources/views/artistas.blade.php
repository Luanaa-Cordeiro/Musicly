
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


@if(session()->has('message'))
    <div class="alerta alert-success alert alert-dismissible">
        {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class='adicionar'>
    <h2>Artistas</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Adicionar
</button>
</div>

<div class="table-wrapper">
                <table class="table table-responsive table-striped table-hover">
                  <thead class="">
                    <tr>
                      <th style="background-color:#6d7fcc; color:white;">Id</th>
                      <th style="background-color:#6d7fcc; color:white;">Nome</th>
                      <th style="background-color:#6d7fcc; color:white;" id='ação'>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
    @foreach($artistas as $artista)
    <tr>
        <td>{{$artista->id}}</td>
        <td>{{$artista->nome}}</td>
        <td id='botões'>
            <button id="editar"><a href="{{ route('artistas.edit', ['artista' => $artista->id]) }}">Editar</a></button>
            <button id="deletar"><a href="{{route('artistas.show',['artista' => $artista->id])}}">Mostrar</a></button>
        </td>
    </tr>
    @endforeach
</tbody>
        </table>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Criar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
   
      <div class="main">
<div class="formulario">
<form action="{{ route('artistas.store')}}" method="post">
@csrf
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label" for="nome_artista" style="color:white;">Nome do Artista<span class="asterisco">*</span></label>
    <input value='{{old("nome")}}' type="text" id="form1Example2" class="form-control" name="nome" placeholder="Nome" />
  </div>

</div>
      </div>
      <div class="modal-footer">
      <div id="botao_criar">
  <button data-mdb-ripple-init type="submit" id="criar" class="btn btn-block">Criar</button>
  
</div>
      </div>
    </div>
  </div>
</div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
</body>
</html>









