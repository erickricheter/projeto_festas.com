<?php

require_once '../models/users.models.php';

class UserController
{
  public function cadastrarUsuario($email, $senha)
  {
    if (cadastrar($email, $senha)) {
      header('Location: ../views/login.view.php');
      exit;
    } else {
      $error_message = 'Este email já está cadastrado!';
      echo $error_message;
    }
  }
}

$userController = new UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $userController->cadastrarUsuario($email, $senha);
}

include '../views/register.view.php';
