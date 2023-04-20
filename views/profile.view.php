<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
  $_SESSION['error_message'] = "O usuário precisa estar logado!";
  header("Location: login.view.php");
  exit;
}
// Verifica se o usuário está logado ou não
$user_logged_in = isset($_SESSION['logado']);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil</title>
  <link rel="stylesheet" href="../styles/style.css">
  <script src="https://kit.fontawesome.com/29b8768e85.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  if (isset($error_message)) : ?>
    <div class="error-message"><?php echo $error_message; ?></div>
  <?php endif ?>
  <header>
    <nav>
      <a href="../index.php"><img src="https://i.imgur.com/ijNyFsn.png" alt="festas.com logo" width="215" height="50"></a>
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
      <h1>Edite seu perfil:</h1>
      <form action="">
        <div class="input-group">
          <div class="input-field">
            <i class="fa-regular fa-image"></i>
            <label for="imagem">Foto:</label>
            <input type="file" name="imagem">
          </div>
          <div class="input-field">
            <i class="fa-solid fa-ticket"></i>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required placeholder="Digite seu nome">
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required placeholder="Digite sua senha">
          </div>
          <div class="input-field">
            <i class="fa-solid fa-chalkboard-user"></i>
            <label for="email">Email:</label>
            <input type="email" name="email" required placeholder="Seu Email">
          </div>
        </div>
        <button type="submit" class="btn-register">Cadastrar</button>
      </form>
    </div>
  </main>
</body>

</html>