<?php
session_start();

// Array com usuários cadastrados
$users = array(
  'admin@gmail.com' => '123456',
  'joao@gmail.com' => 'senha123',
  'maria@gmail.com' => 'qwerty',
);

function login($email, $password)
{
  global $users;
  if (isset($users[$email]) && $users[$email] === $password) {
    $_SESSION['email'] = $email;
    $_SESSION['logado'] = true;
    print_r($email, $password);
    return true;
  }
  return false;
}


function cadastrar($email, $password)
{
  global $users;
  //caso já tenha um usuário com o email cadastrado o sistema retorna o erro
  if (isset($users[$email])) {
    return false;
  }
  //Caso não exista o sistema adiciona o e-mail ao novo usuário
  $users[$email] = $password;
  return true;
}
