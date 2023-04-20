<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../styles/style.css">
  <script src="https://kit.fontawesome.com/29b8768e85.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php if (isset($error_message)) : ?>
    <div><?php echo $error_message ?></div>
  <?php endif ?>
  <header>
    <nav>
      <a href="../index.php"><img src="https://i.imgur.com/ijNyFsn.png" alt="festas.com logo" width="215" height="50"></a>
      <ul class="nav-list">
        <li>
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
          <a href="login.view.php">Login / Cadastro</a>
        </li>
        <li>
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
          <a href="controllers/Logout.controller.php">Logout</a>
        </li>
        <li><a href="">
            <i class="fa-regular fa-calendar"></i><a href="new.event.view.php">Cadastrar evento</a></li>
        <li><i class="fa-regular fa-user"></i><a href="profile.view.php">Perfil</a></li>
      </ul>
    </nav>
  </header>
  <main class="container">
    <div class="form-box">
      <h1>Cadastre-se</h1>
      <form method="post" action="../controllers/Register.controller.php">
        <div class="input-group">
          <div class="input-field">
            <i class="fa-solid fa-chalkboard-user"></i>
            <label for="email">Email:</label>
            <input type="email" name="email" required placeholder="Seu Email">
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required placeholder="Digite sua senha">
          </div>
          <p>Já tem uma conta! <a href="../views/login.view.php">Faça o login!</a></p>
        </div>
        <button type="submit" class="btn-register">Cadastrar</button>
      </form>
    </div>
  </main>
</body>

</html>