<head>
  <meta charset="UTF-8">
  <title>Meus Produtos</title>
  <style>
    body {
      font-family: Verdana, sans-serif;
      background-color: #f9f9ff;
      padding: 30px;
    }
    h1 {
      text-align: center;
      color: #4a4a8f;
    }
    .botao-container {
      text-align: center;
      margin-bottom: 20px;
    }
    .botao-container button {
      background-color: #4a4a8f;
      color: white;
      padding: 10px 20px;
      margin: 0 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    .botao-container button:hover {
      background-color: #363674;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #e0e0ff;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Meus Produtos</h1>

  <div class="botao-container">
    <a href='/list'>Produtos</a>
    <a href='/newproduct'>Criar Novo Produto</a>
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
    @foreach($products as $product)
    <tbody>
      <tr>
        <td>{{$product->title}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->user->name}}</td>
        <td>
          <form action="{{ route('myproduct.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</body>