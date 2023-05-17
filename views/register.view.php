<?php include 'header.view.php'; ?>
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