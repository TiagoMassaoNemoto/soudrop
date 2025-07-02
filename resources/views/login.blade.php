<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eef2ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 300px;
    }
    h2 {
      text-align: center;
      color: #4a57a3;
    }
    input[type="email"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      width: 100%;
      background-color: #4a57a3;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #354296;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="#" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <input type="submit" value="Entrar">
    </form>
  </div>
</body>