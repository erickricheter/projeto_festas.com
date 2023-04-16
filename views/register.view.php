<?php
// if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
//   //header('Location: ../login.php');
//   echo "Já logado";
//   exit;
// }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Cadastro</title>
</head>

<body>
  <?php if (isset($error_message)) : ?>
    <div><?php echo $error_message ?></div>
  <?php endif ?>

  <form method="post" action="../controllers/Register.controller.php">
    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" required>
    </div>

    <div>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" required>
    </div>

    <button type="submit">Cadastrar</button>
  </form>
</body>

</html>