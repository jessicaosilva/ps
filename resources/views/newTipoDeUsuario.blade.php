@extends('layouts.app')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>{{ isset($tipoUsuario['data'][0]) ? 'Editar' : 'Cadastrar' }} Tipo de Usuário</h2>
            <form action="{{ url('/tipoDeUsuarios') }}" method="POST">
                @csrf
                @if (isset($tipoUsuario['data'][0]))
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $tipoUsuario['data'][0]['ID'] }}">
                @endif
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $tipoUsuario['data'][0]['Descricao'] ?? '' }}" required>
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($tipoUsuario['data'][0]) ? 'Atualizar' : 'Cadastrar' }}</button>
            </form>
        </div>
    </div>
</div>