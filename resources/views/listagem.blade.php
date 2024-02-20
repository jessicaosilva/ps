<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Usuários</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/71dede5b9a.js" crossorigin="anonymous"></script>
        <style>
             /* Adicionar largura igual para cada coluna */
            th,
            td {
                width: calc(100% / 7); /* 7 colunas, dividindo igualmente */
                padding: 10px; /* Adicionar preenchimento de 10px */
            }

            /* Mudar de cor ao passar o mouse sobre as linhas da tabela */
            .table-hover tbody tr:hover {
                background-color: #f5f5f5;
            }

            /* Remover bordas e cores dos botões */
            .btn-edit,
            .btn-delete {
                border: none;
                background-color: transparent;
                padding: 0;
                cursor: pointer;
            }

            /* Estilo para o clique nos botões */
            .btn-edit:focus,
            .btn-delete:focus {
                outline: none; /* Remover a borda de foco padrão */
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); /* Adicionar sombra */ 
            }

            /* Estilo para o hover sobre os botões */
            .btn-edit:hover i {
                color: blue;
            }

            .btn-delete:hover i {
                color: red;
            }

            /* Adicionar espaço entre os botões */
            .btn-delete {
                margin: 0 0 0 1em;
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <h2 class="text-center mb-4">Listagem de Usuários</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Ações</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">País</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Nome de Usuário</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody id="tabela-usuarios">
                    <!-- Linhas de usuários -->
                    <tr>
                        <!-- Coluna de ações -->
                        <td class="actions">
                            <!-- Ícones de edição e lixeira -->
                            <button class="edit-btn btn-edit"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        <!-- Informações do usuário -->
                        <td>Jessica Oliveira</td>
                        <td>01/01/1990</td>
                        <td>Brasil</td>
                        <td>São Paulo</td>
                        <td>jessolie</td>
                        <td>jessolie@gmail.com</td>
                    </tr>
                    <tr>
                        <!-- Coluna de ações -->
                        <td class="actions">
                            <!-- Ícones de edição e lixeira -->
                            <button class="edit-btn btn-edit"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        <!-- Informações do usuário -->
                        <td>Rebeca Feitosa</td>
                        <td>15/05/1985</td>
                        <td>Brasil</td>
                        <td>São Paulo</td>
                        <td>aaceber</td>
                        <td>rebecafeitosa@gmail.com</td>
                    </tr>
                    <tr>
                        <!-- Coluna de ações -->
                        <td class="actions">
                            <!-- Ícones de edição e lixeira -->
                            <button class="edit-btn btn-edit"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        <!-- Informações do usuário -->
                        <td>Maria Silva</td>
                        <td>20/12/1978</td>
                        <td>Brasil</td>
                        <td>Rio de Janeiro</td>
                        <td>mariasilva</td>
                        <td>mariasilva@gmail.com</td>
                    </tr>
                    <tr>
                        <!-- Coluna de ações -->
                        <td class="actions">
                            <!-- Ícones de edição e lixeira -->
                            <button class="edit-btn btn-edit"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        <!-- Informações do usuário -->
                        <td>João Santos</td>
                        <td>07/08/1987</td>
                        <td>Brasil</td>
                        <td>Minas Gerais</td>
                        <td>joaosantos</td>
                        <td>joaosantos@gmail.com</td>
                    </tr>
                    <tr>
                        <!-- Coluna de ações -->
                        <td class="actions">
                            <!-- Ícones de edição e lixeira -->
                            <button class="edit-btn btn-edit"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        <!-- Informações do usuário -->
                        <td>Michael Johnson</td>
                        <td>25/03/1973</td>
                        <td>Brasil</td>
                        <td>Bahia</td>
                        <td>michaelj</td>
                        <td>michaelj@gmail.com</td>
                    </tr>
                    <tr>
                        <!-- Coluna de ações -->
                        <td class="actions">
                            <!-- Ícones de edição e lixeira -->
                            <button class="edit-btn btn-edit"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        <!-- Informações do usuário -->
                        <td>Ana Oliveira</td>
                        <td>10/09/1998</td>
                        <td>Brasil</td>
                        <td>Alagoas</td>
                        <td>anao</td>
                        <td>anao@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
