<?php
class User
{
  private $users;

  public function __construct()
  {
    $this->users = array(
      'admin@gmail.com' => '123456',
      'joao@gmail.com' => 'senha123',
      'maria@gmail.com' => 'qwerty',
    );
  }

  public function login($email, $password)
  {
    if (isset($this->users[$email]) && $this->users[$email] === $password) {
      $_SESSION['email'] = $email;
      $_SESSION['logado'] = true;
      return true;
    }
    return false;
  }

  public function cadastrar($email, $password)
  {
    if (isset($this->users[$email])) {
      return false;
    }

    $this->users[$email] = $password;
    $_SESSION['users'] = $this->users;
    return true;
  }
}

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user->login($email, $senha);
  } else if (isset($_POST['register_email']) && isset($_POST['register_senha'])) {
    $email = $_POST['register_email'];
    $senha = $_POST['register_senha'];

    $user->cadastrar($email, $senha);
  }
}

require_once '../models/users.models.php';
