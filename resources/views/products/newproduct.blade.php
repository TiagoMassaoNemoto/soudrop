@extends('layouts.main')

@section('title', 'Lista de Produtos')

@section('content')

@section('body')
  <h1 class="h1-center">Cadastrar Novo Produto</h1>

  <div class="form-newproduct">
    <form action="/newproduct" method="POST">
      @csrf
      <label for="title">Título do Produto:</label>
      <input type="title" id="title" name="title" required>

      <label for="description">Descrição:</label>
      <textarea id="description" name="description" rows="4" cols="50" maxlength="1000" required></textarea>

      <label for="filter">Escolha uma categoria:</label>
        <select name="filter" id="filter">
          <option value="Fruta">Fruta</option>
          <option value="Legumes">Legumes</option>
          <option value="Doce">Doce</option>
          <option value="Salgado">Salgado</option>
        </select>

      <label for="value">Valor (R$):</label>
      <input type="number" id="value" name="value" step="0.01" required>

      <input type="submit" value="Cadastrar Produto">
    </form>
  </div>
@endsection