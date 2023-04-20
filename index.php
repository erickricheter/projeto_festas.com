<?php
session_start();
require 'controllers/Event.controller.php';
$event = isset($_GET['event']) ? json_decode(urldecode($_GET['event']), true) : null;
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']);

// Verifica se o usuário está logado ou não
$user_logged_in = isset($_SESSION['logado']);
?>
<!DOCTYPE html>
<html>

<head>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/index.style.css">
    <script src="https://kit.fontawesome.com/29b8768e85.js" crossorigin="anonymous"></script>
  </head>

<body class="index-body">

  <header>
    <nav>
      <a href="../index.php"><img src="https://i.imgur.com/ijNyFsn.png" alt="festas.com logo" width="230" height="60"></a>
      <ul class="nav-list">
        <?php if (!$user_logged_in) : ?>
          <li>
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <a href="views/login.view.php">Login / Cadastro</a>
          </li>
        <?php else : ?>
          <li>
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <a href="controllers/Logout.controller.php">Logout</a>
          </li>
          <li>
            <a href="views/new.event.view.php">
              <i class="fa-regular fa-calendar"></i>Cadastrar evento
            </a>
          </li>
          <li>
            <a href="views/profile.view.php">
              <i class="fa-regular fa-user"></i>Perfil
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main>
    <section class="events">
      <h1>Conheça nossos eventos!</h1>
      <div class="all-events">
        <div class="event">
          <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagem de nosso evento!" srcset="">
          <div class="event-infos">
            <h4 class="event-title">
              Teste nome evento
            </h4>
            <p class="event-date">Data e horário do evento: 12/04/2023 12:05</p>
            <br>
            <p class="event-description">Teste descrição do evento descrição do evento descrição do evento descrição do evento </p>

          </div>
        </div>
        <div class="event">
          <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagem de nosso evento!" srcset="">
          <div class="event-infos">
            <h4 class="event-title">
              Teste nome evento 2
            </h4>
            <p class="event-date">Data do evento: 12/04/2023</p>
            <p class="event-hour">Horário: 12:05</p>
            <br>
            <p class="event-description">Teste descrição do evento descrição do evento descrição do evento descrição do evento</p>
          </div>
        </div>
        <div class="event">
          <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagem de nosso evento!" srcset="">
          <div class="event-infos">
            <h4 class="event-title">
              Teste nome evento 2
            </h4>
            <p class="event-date">Data do evento: 12/04/2023</p>
            <p class="event-hour">Horário: 12:05</p>
            <br>
            <p class="event-description">Teste descrição do evento descrição do evento descrição do evento descrição do evento</p>

          </div>
        </div>
        <?php
        if (is_array($event)) {
          echo '<div class="event">';
          echo '<img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagem de nosso evento!" srcset="">';
          echo '<div class="event-infos">';
          echo '<h4 class="event-title">' . $event['evento'] . '</h4>';
          echo '<p class="event-date">Data e horário do evento: ' . $event['data'] . $event['horario'] . '</p>';
          echo '<br>';
          echo '<p class="event-description">' . $event['descricao'] . '</p>';
          echo '</div>';
          echo '</div>';
        } else {
          echo "Erro: Não foi possível exibir os eventos.";
        }
        ?>
      </div>
    </section>
  </main>
</body>

</html>