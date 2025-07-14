<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  @yield('content')
  <nav class="navbar">
    <div class="logo">Logo</div>

    <ul>
      <li><a href="/">Início</a></li>
      <li><a href="/list">Produtos</a></li>
      <li><a href="/newproduct">Criar</a></li>
      <li><a href="/myproduct">Meu</a></li>
    </ul>

    <div class="actions">
      <a href="/register" class="register-btn">📝 Registrar</a>
      <a href="/login" class="login-btn">Entrar</a>
    </div>
  </nav>

</body>
</html>
