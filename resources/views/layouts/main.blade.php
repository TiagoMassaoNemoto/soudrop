<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/main.css">
  <script src="/js/main.js" defer></script>
</head>
<body>
  @yield('content')
  <nav class="navbar">
    <div class="logo">Logo</div>

    <ul>
      <li><a href="/">Início</a></li>
      <li><a href="/list">Produtos</a></li>
      @auth
      <li><a href="/newproduct">Criar</a></li>
      <li><a href="/myproduct">Meu</a></li>
      @endauth
    </ul>

    <div class="actions">
      @auth
      <a href="/perfil" class="perfil-btn">Perfil</a>
      @endauth
      @guest
      <a href="/register" class="register-btn">Registrar</a>
      <a href="/login" class="login-btn">Entrar</a>
      @endguest
    </div>
  </nav>
  @yield('body')

</body>
</html>