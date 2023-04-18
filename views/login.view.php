<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <?php if (isset($error_message)) : ?>
    <div><?php echo $error_message ?></div>
  <?php endif ?>

  <form method="post">
    <div class="container">

    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" required>
    </div>

    <div>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" required>
    </div>

    <button type="submit">Entrar</button>
  </form>
  <br>
  <a href="../views/register.view.php">Cadastre-se</a>
</body>

</html>