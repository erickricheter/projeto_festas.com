<?php
session_start();
require 'controllers/Event.controller.php';
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']);

// Verifica se o usuário está logado ou não
$user_logged_in = isset($_SESSION['logado']);

$eventController = new EventController();
$events = $eventController->getEventsFromDatabase();
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