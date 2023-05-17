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

<?php include 'header.view.php'; ?>
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