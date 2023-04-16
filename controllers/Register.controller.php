<?php
require_once '../models/users.models.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if (cadastrar($email, $senha)) {
    header('Location: ../views/login.view.php');
    exit;
  } else {
    $error_message = 'Este email já está cadastrado!';
  }
}

include '../views/register.view.php';
