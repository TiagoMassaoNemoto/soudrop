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
    <button onclick="alert('Exibindo produtos...')">Ver Produtos</button>
    <button onclick="alert('Criando novo produto...')">Criar Novo Produto</button>
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
        <td>Produto A</td>
        <td>Produto de alta qualidade para uso doméstico.</td>
        <td>01/07/2025</td>
        <td>João Silva</td>
      </tr>
      <tr>
        <td>Produto B</td>
        <td>Ferramenta versátil para pequenas reformas.</td>
        <td>28/06/2025</td>
        <td>Maria Costa</td>
      </tr>
      <tr>
        <td>Produto C</td>
        <td>Dispositivo inteligente com integração IoT.</td>
        <td>15/06/2025</td>
        <td>Paulo Higa</td>
      </tr>
    </tbody>
  </table>
</body>