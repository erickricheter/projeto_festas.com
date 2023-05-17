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