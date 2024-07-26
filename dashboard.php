<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de tarefas</title>
  <link rel="icon" type="image/x-icon" href="./img/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="css/globalDashboard.css" rel="stylesheet">
</head>

<body>
  <div id="background">
    <video loop autoplay muted>
      <source src="./mp4/backgroundVideo.mp4" type="video/mp4">
    </video>
  </div>

  <nav class=" navbar navbar-expand-lg custom-navbar-bg">
    <div class="container-fluid">
      <!-- PAINEL DE NAVEGACAO SUPERIOR -->
      <img src="./img/logo.png" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navigation">
          <li class="nav-item">
            <a class="nav-link navigation_link" aria-current="page" onclick="homePage()" href="#">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigation_link" onclick="mostrarModelos()" href="#">Modelos</a>
          </li>
          <li class="nav-item">
            <button class="nav-link btn btn-link navigation_link" onclick="abrirCalendario()">Calendário</button>
          </li>
        </ul>
        <!-- Botão DROPDAWN -->
        <div class="btn-group dropstart">
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split custom-dropdawn" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropstart</span>
          </button>
          <ul class="dropdown-menu">
          </ul>
          <button type="button" class="btn btn-secondary custom-dropdawn">
            Logado
          </button>
        </div>
      </div>
  </nav>

  <div data-aos="fade-up" data-aos-anchor-placement="center-center">
    <h3> Task list</h3>
  </div>
  <div class="container custom-container">
    <div class="navegacao-lateral">
      <!-- Botoes de Ações -->
      <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        <button type="button" class="btn btn-primary custom-dropdown-btn" onclick="criarLista()"><i class="fa-solid fa-circle-plus"></i> Criar Lista</button><br>
        <button type="button" class="btn btn-primary custom-dropdown-btn"><i class="fa-solid fa-list"></i> Minhas Listas</button>
        <div class="btn-group dropend" role="group">
          <button type="button" class="btn btn-primary custom-dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-magnifying-glass"></i>
            Buscar
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Em breve </a></li>
            <li><a class="dropdown-item" href="#">Concluídas</a></li>
            <li><a class="dropdown-item" href="#">Adicionar seção</a></li>
          </ul>
        </div>
        <div class="btn-group dropend" role="group">
          <button type="button" class="btn btn-primary custom-dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-tags"></i> Etiquetas
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Trabalho</a></li>
            <li><a class="dropdown-item" href="#">Lazer</a></li>
            <li><a class="dropdown-item" href="#">Pessoal</a></li>
            <li><a class="dropdown-item" href="#">Metas</a></li>
          </ul>
        </div>
        <div class="btn-group dropend" role="group">
          <button type="button" class="btn btn-primary custom-dropdown-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-people-group"></i> Times
          </button>
          <ul class="dropdown-menu" id="timesDropdown">
            <li><a class="dropdown-item " href="#" onclick="adicionarTime()"><i class="fa-solid fa-circle-plus"></i> Adicionar time</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Modal TIME -->
    <div class="modal fade" id="timeModal" tabindex="-1" aria-labelledby="timeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="timeModalLabel">Adicionar Time</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="timeForm">
              <div class="mb-3">
                <label for="nomeTime" class="form-label">Nome do Time</label>
                <input type="text" class="form-control" id="nomeTime" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="salvarTime()">Salvar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="navegacao-principal">
      <!-- conteudo da funcao mostrarModelos -->
      <div class="conteiner-central">
        <div class="content-principal">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="image-container">
                  <img src="./img/listaCompras.png" class="d-block" alt="...">
                  <img src="./img/checkList.png" class="imgLista">
                </div>
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
    </div>

    <!-- Modal do Calendário -->
    <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="calendarModalLabel">Calendário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="datepicker"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="functions.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      function homePage() {
        window.location.href = 'index.html';
      }
    </script>
</body>

</html>