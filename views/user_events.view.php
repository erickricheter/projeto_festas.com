<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
  $_SESSION['error_message'] = "O usuário precisa estar logado!";
  header("Location: login.view.php");
  exit;
}
?>
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
  <?php
  if (isset($error_message)) : ?>
    <div class="error-message"><?php echo $error_message; ?></div>
  <?php endif ?>
  <header>
    <nav>
      <a href="../index.php" class="logo">LOGO TESTE</a>
      <ul class="nav-list">
        <?php if (!isset($_SESSION['user_id'])) : ?>
          <li>
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <a href="login.view.php">Login / Cadastro</a>
          </li>
        <?php endif; ?>
        <?php if (isset($_SESSION['user_id'])) : ?>
          <li>
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <a href="controllers/Logout.controller.php">Logout</a>
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

  </main>
</body>

</html>