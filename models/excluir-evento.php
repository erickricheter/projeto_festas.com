<?php
require_once '../controllers/Event.controller.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $eventController = new EventController();
  $event_id = $_POST['event_id'];

  if ($eventController->deleteEvent($event_id)) {
    session_start();
    $_SESSION['success_message'] = 'Evento excluído com sucesso!';
    header('Location: ../index.php');
    exit();
  } else {
    session_start();
    $_SESSION['error_message'] = 'Erro ao excluir evento selecionado!';
    header('Location: ../index.php');
    exit();
  }
}
