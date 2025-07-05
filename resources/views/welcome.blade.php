<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página Inicial</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #444;
      display: flex;
      justify-content: center;
      padding: 10px 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      padding: 30px;
      text-align: center;
    }

    h1 {
      color: #333;
    }
  </style>
</head>
<body>

  <header>
    <h1>Bem-vindo ao Meu Site</h1>
  </header>

  <nav>
    <a href="/list">Produtos</a>
    @auth
    <a href="/myproduct">Meus Produtos</a>
    <form action="/logout" method='POST'>
        @csrf
        <a href="/logout" onclick="event.preventDefault();
            this.closest('form').submit();">Sair</a>
        </form>
    @endauth
    @guest
    <a href="/login">Entrar</a>
    <a href="/register">Cadastrar</a>
    @endguest
  </nav>

  <main>
    <h2>Home Genérica</h2>
    <p>Esta é uma página inicial simples com navegação básica.</p>
  </main>

</body>
</html>
