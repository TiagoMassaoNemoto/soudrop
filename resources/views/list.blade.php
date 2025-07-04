
<p> --  -- </p>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
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
  <h1>Lista de Produtos</h1>

  <div class="botao-container">
    <a href="/myproduct" class="btn btn-primary">Meus Produtos</a>
    <a href="/newproduct" class="btn btn-primary">Criar Novo Produto</a>
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
    @foreach($new_products as $new_product)
    <tbody>
      <tr>
        <td>{{$new_product->title}}</td>
        <td>{{$new_product->description}}</td>
        <td>{{$new_product->created_at}}</td>
        <td>{{$new_product->author}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</body>