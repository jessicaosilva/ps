@extends('layouts.app')

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-{{ session('success') == 'success' ? 'success' : 'danger'}}">
            {{ session('message') }}
        </div>
    @endif

    <div class="row mb-4">
        <div class="col">
            <h2>Listagem de Tipos de Usuário</h2>
        </div>
        <div class="col text-right">
            <a href="{{ route('cadastroTipoDeUsuario') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
        </div>
    </div>

    <div class="table-responsive container">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="row">
                    <th class="col-2 text-center">Ações</th>
                    <th class="col-2">ID</th>
                    <th class="col-8">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list['data'] as $tipo)
                <tr  class="row">
                    <td class="col-2 text-center" >
                        <a style="margin:5px 0px 5px 0px" href="{{ url('/tipoDeUsuarios/edit/'.$tipo['ID']) }}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                        <form id="formTDU_{{ $tipo['ID'] }}" action="{{ url('/tipoDeUsuarios/delete/'.$tipo['ID']) }}" method="GET" style="display:inline-block;">
                            @csrf
                            <button style="margin:5px 0px 5px 0px" type="button" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#modalConfirmacao" data-dado="{{ $tipo['ID'] }}"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                    <td class="col-2">{{ $tipo['ID'] }}</td>
                    <td class="col-8">{{ $tipo['Descricao'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Próxima</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="modal fade" id="modalConfirmacao" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você tem certeza que deseja excluir?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary submitForm" id="">Excluir</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tipoId, meuform = "";

        $('.delete-btn').click(function() {
            tipoId = $(this).data('dado');
            meuform = "#formTDU_"+tipoId;
        });
        
        $('.submitForm').click(function() {
            $(meuform).submit();
        });
    });
</script>
