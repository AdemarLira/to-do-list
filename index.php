<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div id="cabecalho">
      <div id="header-content">
        <h1>Tasks List</h1>
        <img src="/to-do-list/logo.png" alt="Logo">
      </div>
    </div>
    <div class="login">
      <h2>Login</h2><br>
      <input type="email" placeholder="Insira seu email..." required><br>
      <input type="password" placeholder="Insira sua senha..." required><br>
      <button type="submit" value="entrar" id="entrar">Entrar</button>
      <a href="#" id="atualizar-senha">Esqueceu a senha?</a><br>
      <a href="#" id="botao-cadastrar" onclick=criarCadastro()>Ainda não possui cadastro?</a>
    </div>
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