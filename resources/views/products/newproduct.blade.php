<head>
  <meta charset="UTF-8">
  <title>Cadastrar Produto</title>
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
    .form-container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }
    input[type="text"], textarea, input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      background-color: #4a4a8f;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #363674;
    }
  </style>
</head>
<body>
  <h1>Cadastrar Novo Produto</h1>

  <div class="form-container">
    <form action="/newproduct" method="POST">
      @csrf
      <label for="title">Título do Produto:</label>
      <input type="text" id="title" name="title" required>

      <label for="description">Descrição:</label>
      <textarea id="description" name="description" rows="4" required></textarea>

      <label for="value">Valor (R$):</label>
      <input type="number" id="value" name="value" step="0.01" required>

      <input type="submit" value="Cadastrar Produto">
    </form>
  </div>
</body>