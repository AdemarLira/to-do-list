<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="custom-container">
    <div id="cabecalho">
      <div id="conteudo-cabecalho">
        <h1>Tasks List</h1>
        <img src="/to-do-list/logo.png" alt="Logo">
      </div>
    </div>
    <div class="custom-login">
      <h2>Login</h2><br>
      <input type="email" class="inputs" placeholder="Insira seu email..." required><br>
      <input type="password" class="inputs" placeholder="Insira sua senha..." required><br>
      <button type="submit" value="entrar" id="entrar">Entrar</button>
      <a href="#" id="atualizar-senha">Esqueceu a senha?</a><br>
      <a href="#" id="link-cadastrar" onclick=criarCadastro()>Ainda não possui cadastro?</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      function criarCadastro() {
        $('#cadastroModal').modal('show');
      }

      function salvarCadastro() {
        alert('Cadastro criado com sucesso');
      }
    </script>
</body>

</html>