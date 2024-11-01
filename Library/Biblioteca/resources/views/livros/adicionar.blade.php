@extends('layouts.app')

@section('content')
    <h1>Adicionar Livro</h1>
    <form action="/livros" method="POST">
        @csrf
        <div class="form-group">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Autor</label>
            <input type="text" name="autor" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Ano de Publicação</label>
            <input type="number" name="ano_publicacao" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Resumo</label>
            <textarea name="resumo" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Livro</button>
    </form>
@endsectionphp artisan serve