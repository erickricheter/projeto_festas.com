<?php
require_once '../controllers/Event.controller.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $eventController = new EventController();
  $event_id = $_POST['event_id'];

  if ($eventController->deleteEvent($event_id)) {
    // Redirecionar para a página de eventos ou exibir uma mensagem de sucesso
    header('Location: ../index.php');
    exit();
  } else {
    // Redirecionar para a página de eventos ou exibir uma mensagem de erro
    header('Location: ../index.php');
    exit();
  }
}
