<?php
session_start();
require 'controllers/Event.controller.php';
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']);

// Verifica se o usuário está logado ou não
$user_logged_in = isset($_SESSION['logado']);

$eventController = new EventController();
$events = $eventController->getEventsFromDatabase();

$routes = [
  '/projeto_festas.com/login' => 'login.view',
  '/projeto_festas.com/eventos' => 'user_events.view',
  '/projeto_festas.com/perfil' => 'profile.view',
  '/projeto_festas.com/cadastrar' => 'register.view'
];

$path = $_SERVER['REQUEST_URI'];
if (array_key_exists($path, $routes)) {
  $route = $routes[$path];
  require_once 'views/' . $route . '.php';
  exit;
} else {
  require_once 'views/home.view.php';
}

?>
<?php include 'views/header.view.php'; ?>
<main>
  <section class="events">
    <h1>Conheça nossos eventos!</h1>
    <div class="all-events">
      <div class="event">
        <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagem de nosso evento!" srcset="">
        <div class="event-infos">
          <h4 class="event-title">
            Evento em Ponta Grossa!
          </h4>
          <p class="event-date">Data e horário do evento: 12/04/2023 12:05</p>
          <br>
          <p class="event-description">Teste descrição do evento descrição do evento descrição do evento descrição do evento </p>
        </div>
      </div>
      <?php
      if (!empty($events)) {
        foreach ($events as $event) {
          echo '<div class="event">';
          echo '<img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagem de nosso evento!" srcset="">';
          echo '<div class="event-infos">';
          echo '<h4 class="event-title">' . $event['evento'] . '</h4>';
          echo '<p class="event-date">Data e horário do evento: ' . $event['data'] . ' ' . $event['horario'] . '</p>';
          echo '<br>';
          echo '<p class="event-description">' . $event['descricao'] . '</p>';
          echo '<form method="POST" action="models/excluir-evento.php" class="delete-form">';
          echo '<input type="hidden" name="event_id" value="' . $event['id'] . '">';
          echo '<button type="submit" class="delete-button" data-id="' . $event['id'] . '">Deletar</button>';
          echo '</form>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo "Erro: Não foi possível exibir os eventos.";
      }
      ?>
    </div>
  </section>
</main>