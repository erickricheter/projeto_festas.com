<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once '../models/users.models.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  echo "Email: " . $email . "<br>";
  echo "Senha: " . $senha . "<br>";

  if (login($email, $senha)) {
    echo "Usuário logado com sucesso";
    header('Location: ../index.php');
    exit;
  } else {
    $error_message = 'Usuário ou senha incorretos!';
    echo $error_message;
  }
}

include '../views/login.view.php';
