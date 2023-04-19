<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  $_SESSION['error_message'] = "O usuário precisa estar logado!";
  header("Location: login.view.php");
  exit;
}
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
  <?php
  if (isset($error_message)) : ?>
    <div><?php echo $error_message; ?></div>
  <?php endif ?>
  <header>
    <nav>
      <a href="../index.php" class="logo">LOGO TESTE</a>
      <ul class="nav-list">
        <li>
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
          <a href="login.view.php">Login / Cadastro</a>
        </li>
        <li>
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
          <a href="">Logout</a>
        </li>
        <li><a href="">
            <i class="fa-regular fa-calendar"></i><a href="new.event.view.php">Cadastrar evento</a></li>
        <li><i class="fa-regular fa-user"></i><a href="profile.view.php">Perfil</a></li>
      </ul>
    </nav>
  </header>
  <main class="container">

  </main>
</body>

</html>