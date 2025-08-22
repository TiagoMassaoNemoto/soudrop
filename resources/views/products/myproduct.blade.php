@extends('layouts.main')

@section('title', 'Meus Produtos')

@section('content')

@section('body')
  <h1>Meus Produtos</h1>
  <table>
    <thead>
      <tr>
        <th>Nome do Produto</th>
        <th>Descrição</th>
        <th>Data de Criação</th>
        <th>Autor</th>
        <th>Ação</th>
      </tr>
    </thead>
    @foreach($products as $product)
    <tbody>
      <tr>
        <td>{{$product->title}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->user->name}}</td>
        <td>
          <button class="edit-btn" onclick="window.location.href='/products/edit/{{ $product->id }}'">Editar</button>
          <form action="{{ route('myproduct.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete-btn" type="submit">Excluir</button>
            
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection