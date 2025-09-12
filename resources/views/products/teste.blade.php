@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

@section('body')

<div id="filtro-table-container">
<div id="filtro-container">
  <p>Filtro</p>
  <label>
    <input type="checkbox" name="filtro" value="legumes">
    <span class="checkbox"></span> Legumes
  </label>
  <label>
    <input type="checkbox" name="filtro" value="fruta">
    <span class="checkbox"></span> Fruta
  </label>
  <label>
    <input type="checkbox" name="filtro" value="doce">
    <span class="checkbox"></span> Doce
  </label>
  <label>
    <input type="checkbox" name="filtro" value="salgado">
    <span class="checkbox"></span> Salgado
  </label>
</div>

<table>
  <thead>
    <tr>
      <th>Nome do Produto</th>
      <th>Descrição</th>
      <th>Data de Criação</th>
      <th>Autor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>teste</td>
      <td>teste</td>
      <td>teste</td>
      <td>teste</td>
    </tr>
  </tbody>
</table>
</div>

@endsection


