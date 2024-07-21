<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de tarefas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg custom-navbar-bg">
    <div class="container-fluid">
      <!-- PAINEL DE NAVEGACAO SUPERIOR -->
      <img src="./img/logo.png" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Modelos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Calendário</a>
          </li>
        </ul>
        <!-- Botão DROPDAWN -->
        <div class="btn-group dropstart">
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split custom-dropdawn" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropstart</span>
          </button>
          <ul class="dropdown-menu">
            <!-- Dropdown menu links -->
          </ul>
          <button type="button" class="btn btn-secondary custom-dropdawn">
            Logado
          </button>
        </div>
      </div>
  </nav>
  <h3> Task list</h3>
  <div class="navegacao-principal">
    <!-- Botoes de Ações -->
    <div class="navegacao-lateral">
      <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        <button type="button" class="btn btn-primary custom-dropdown-btn" onclick="mostrarModelos()"><i class="fa-solid fa-circle-plus"></i> Criar Lista</button><br>
        <button type="button" class="btn btn-primary custom-dropdown-btn">Minhas Listas</button>
        <div class="btn-group dropend" role="group">
          <button type="button" class="btn btn-primary custom-dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-magnifying-glass"></i>
            Buscar
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
        <div class="btn-group dropend" role="group">
          <button type="button" class="btn btn-primary custom-dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Etiquetas
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Trabalho</a></li>
            <li><a class="dropdown-item" href="#">Lazer</a></li>
            <li><a class="dropdown-item" href="#">Pessoal</a></li>
            <li><a class="dropdown-item" href="#">Metas</a></li>
          </ul>
        </div>
        <br>
        <button type="button" class="btn btn-primary custom-dropdown-btn"><i class="fa-solid fa-list"></i> Minhas Listas</button>
      </div>
    </div>
    <div class="inicio-painel">

    </div>
    <div class="content-principal">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/listaCompras.png" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/diario.png" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/calendario.png" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/receitas.png" class="d-block" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>