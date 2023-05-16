<?php
class SessionController
{
  public function destroySession()
  {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../views/login.view.php");
    exit;
  }
}

$sessionController = new SessionController();
$sessionController->destroySession();
