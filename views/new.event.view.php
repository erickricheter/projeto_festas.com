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
  <form method="POST" action="../controllers/Event.controller.php" enctype="multipart/form-data">
    <div>
      <label for="evento">Nome do evento:</label>
      <input type="text" name="evento" required>
    </div>

    <div>
      <label for="descricao">Descrição:</label>
      <input type="text" name="descricao" required>
    </div>

    <div>
      <label for="local">Local:</label>
      <input type="text" name="local" required>
    </div>

    <div>
      <label for="data">Data:</label>
      <input type="date" name="data" required>
    </div>

    <div>
      <label for="horario">Horário:</label>
      <input type="time" name="horario" required>
    </div>

    <div>
      <label for="imagem">Escolha uma imagem:</label>
      <input type="file" name="imagem">
    </div>

    <button type="submit">Enviar</button>
  </form>
  <br>
</body>

</html>