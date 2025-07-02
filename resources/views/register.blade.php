<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .cadastro-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input[type="text"], input[type="email"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      background-color: #5c6bc0;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }
    input[type="submit"]:hover {
      background-color: #3f51b5;
    }
  </style>
</head>
<body>
  <div class="cadastro-container">
    <h2>Cadastro</h2>
    <form action="#" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <input type="submit" value="Cadastrar">
    </form>
  </div>
</body>
