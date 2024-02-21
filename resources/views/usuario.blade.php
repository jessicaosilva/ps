<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Usuário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Cadastre-se</h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="nome">Nome e Sobrenome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome completo" required>
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
                        </div>
                        <div class="form-group">
                            <label for="pais">País</label>
                            <input type="text" class="form-control" name="pais" id="pais" placeholder="Digite o país" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select class="form-control" name="estado" id="estado" required>
                                <option value="" disabled selected>Selecione o estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AP">Bahia</option>
                                <option value="AP">Minas Gerais</option>
                                <option value="AP">Rio de Janeiro</option>
                                <option value="AP">São Paulo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="username">Nome de Usuário</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Digite o nome de usuário" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Digite o email" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Nova Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a nova senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
