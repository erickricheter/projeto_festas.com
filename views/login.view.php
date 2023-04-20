<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']);

// Verifica se o usuário está logado ou não
$user_logged_in = isset($_SESSION['logado']);
?>
<!DOCTYPE html>
<html>

<head>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://kit.fontawesome.com/29b8768e85.js" crossorigin="anonymous"></script>
  </head>

<body>

  <header>
    <nav>
      <a href="../index.php"><img src="https://i.imgur.com/ijNyFsn.png" alt="festas.com logo" width="230" height="60"></a>
      <ul class="nav-list">
        <?php if (!$user_logged_in) : ?>
          <li>
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <a href="login.view.php">Login / Cadastro</a>
          </li>
        <?php else : ?>
          <li>
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <a href="../controllers/Logout.controller.php">Logout</a>
          </li>
          <li>
            <a href="new.event.view.php">
              <i class="fa-regular fa-calendar"></i>Cadastrar evento
            </a>
          </li>
          <li>
            <a href="profile.view.php">
              <i class="fa-regular fa-user"></i>Perfil
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <main class="container">
    <div class="form-box">
      <?php if (!empty($error_message)) : ?>
        <div class="error-message">
          <p><?php echo $error_message; ?></p>
        </div>
      <?php endif; ?>
      <h1>Login</h1>
      <form method="post" action="../controllers/Login.controller.php">
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
          <p>Não tem uma conta? <a href="../views/register.view.php">Cadastre-se!</a></p>
        </div>

        <button type="submit" class="btn-register">Entrar</button>
      </form>
    </div>
  </main>
</body>

</html>