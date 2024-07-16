<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <!-- modal para criar cadastro -->
        <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Preencha seus dados</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" placeholder="Digite seu nome completo">
                        <input type="email" placeholder="Digite seu email...">
                        <input type="password" placeholder="Senha">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick=salvarCadastro()>Criar</button>
                        </div>
                    </div>
                </div>
            </div>
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