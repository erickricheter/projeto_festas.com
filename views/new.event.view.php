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
  <title>Cadastrar Evento</title>
  <link rel="stylesheet" href="../styles/style.css">
  <script src="https://kit.fontawesome.com/29b8768e85.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav>
      <a href="#" class="logo">LOGO TESTE</a>
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
      <h1>Crie seu evento!</h1>
      <form method="POST" action="../controllers/Event.controller.php" enctype="multipart/form-data">
        <div class="input-group">
          <div class="input-field">
            <i class="fa-solid fa-champagne-glasses"></i>
            <label for="evento">Evento:</label>
            <input type="text" name="evento" required placeholder="Nome do Evento">
          </div>

          <div class="input-field">
            <i class="fa-solid fa-bars-staggered"></i>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" required>
          </div>

          <div class="input-field">
            <i class="fa-solid fa-map-location-dot"></i>
            <label for="local">Local:</label>
            <input type="text" name="local" required>
          </div>

          <div class="input-field">
            <i class="fa-regular fa-calendar-days"></i>
            <label for="data">Data:</label>
            <input type="date" name="data" required>
          </div>

          <div class="input-field">
            <i class="fa-regular fa-clock"></i>
            <label for="horario">Horário:</label>
            <input type="time" name="horario" required>
          </div>

          <div class="input-field">
            <i class="fa-regular fa-image"></i>
            <label for="imagem">Foto:</label>
            <input type="file" name="imagem">
          </div>
        </div>
        <button type="submit" class="btn-register">Cadastrar</button>
      </form>
    </div>
  </main>
</body>

</html>