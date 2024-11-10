<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/inicio.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="{{asset('assets/imagens/MusicLy.png')}}"
        height="35"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link"href="#">MusicLy</a>
        </li>
      </ul>

      <div class="d-flex align-items-center">
        <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
          @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                         class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>


                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                             class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Cadastrar-se
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
        <!--<a
          data-mdb-ripple-init
          class="btn btn-dark px-3"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a>-->
      </div>
    </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
    <button style=""type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"aria-current="true" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item h-100 active" style="background-image: url('{{ asset('assets/imagens/artistas1.avif') }}'); background-size:contain; background-repeat: no-repeat; background-position: center;">
  
      <div class="carousel-caption d-none d-md-block">
        <button class="botao_entrar">Artistas</button>
      </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('{{ asset('assets/imagens/generos_musicais.jpg') }}'); background-size:contain; background-repeat: no-repeat; background-position: center; ">
      
      <div class="carousel-caption d-none d-md-block">
   
        <button class="botao_entrar">Gêneros</button>
      </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('{{ asset('assets/imagens/albuns.png') }}'); background-size:contain; background-repeat: no-repeat; background-position: center;">
     
      <div class="carousel-caption d-none d-md-block">
        <button class="botao_entrar">Albuns</button>
      </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('{{ asset('assets/imagens/musicas.jpg') }}'); background-size:contain; background-repeat: no-repeat; background-position: center;">
    
      <div class="carousel-caption d-none d-md-block">
        <button class="botao_entrar">Musicas</button>
      </div>
    </div>
  </div>
  <button  style="background-color: #6d7fcc; color: white;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color: #6d7fcc; color: white;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>