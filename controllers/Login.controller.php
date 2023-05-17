<?php
session_start();
require_once '../models/users.models.php';

class AuthController
{
  public function login($email, $senha)
  {
    $userModel = new User();
    if ($userModel->login($email, $senha)) {
      header('Location: ../index.php');
      exit;
    } else {
      $error_message = 'Usuário ou senha incorretos!';
      echo $error_message;
    }
  }
}

$authController = new AuthController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $authController->login($email, $senha);
}

include '../views/login.view.php';
