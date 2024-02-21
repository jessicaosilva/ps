<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login de Usuário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="background">
            <div class="container">
                <div class="row justify-content-center align-items-center" style="height: 100vh;">
                    <div class="col-md-6 bg-light p-4 rounded">
                        <h2 class="text-center mb-4">Olá, bem vindo de volta!</h2>
                        <form action="#" method="post">
                            <input class="form-control mb-3" type="text" name="username" placeholder="Nome de usuário ou email" id="username" required/>
                            <input class="form-control mb-3" type="password" name="senha" placeholder="Senha" id="senha" required/>
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                            <div class="text-center mt-3">
                                <a href="esqueceu_senha.blade.php">Esqueceu a senha?</a>
                                <hr>
                                <button type="button" class="btn btn-success btn-lg btn-block" onclick="window.location.href='{{ route('cadastro') }}'">Cadastre-se</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
