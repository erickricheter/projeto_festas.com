<?php
session_start();
require_once '../models/users.models.php';
var_dump($_POST);
if (isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if (login($email, $senha)) {
    header('Location: ../index.php');
    exit;
  } else {
    $error_message = 'Usuário ou senha incorretos!';
    echo $error_message;
  }
}

include '../views/login.view.php';
