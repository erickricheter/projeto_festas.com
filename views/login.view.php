<?php
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']);

// Verifica se o usuário está logado ou não
$user_logged_in = isset($_SESSION['logado']);
?>
<?php include 'header.view.php'; ?>
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