<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de tarefas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styleIndex.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg custom-navbar-bg">
    <div class="container-fluid">
      <!-- PAINEL DE NAVEGACAO SUPERIOR -->
      <img src="/task-list/logo.png" alt="Logo">
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
  <div class="navegacao-principal">
    <div class="navegacao-lateral">
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>