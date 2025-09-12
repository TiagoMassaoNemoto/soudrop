@extends('layouts.main')

@section('title', 'Lista de Produtos')

@section('content')

@section('body')
<h1>Produtos</h1>
<div class="search-txf">
  <form action="/list" method="GET">
    <input type="text" id="search" name="search" placeholder="Pesquisar">
  </form>
@if(count($products) == 0 && $search)
    <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/list">Ver todos os produtos</a></p>
@else
</div>

<div id="filtro-table-container">
  <div id="filtro-container">
    <p>Filtro</p>
    <label>
      <input type="checkbox" name="filter" value="legumes" {{ request('filter') == 'legumes' ? 'checked' : '' }}>
      <span class="checkbox"></span> Legumes
    </label>
    <label>
      <input type="checkbox" name="filter" value="fruta" {{ request('filter') == 'fruta' ? 'checked' : '' }}>
      <span class="checkbox"></span> Fruta
    </label>
    <label>
      <input type="checkbox" name="filter" value="doce" {{ request('filter') == 'doce' ? 'checked' : '' }}>
      <span class="checkbox"></span> Doce
    </label>
    <label>
      <input type="checkbox" name="filter" value="salgado" {{ request('filter') == 'salgado' ? 'checked' : '' }}>
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
        <th>Tipo</th>
      </tr>
    </thead>
    @foreach($products as $product)
    <tbody>
      <tr>
        <td>{{$product->title}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->user->name}}</td>
        <td>{{$product->filter}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endif

@endsection
  