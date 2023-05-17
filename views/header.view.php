  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="styles/index.style.css">
    <link rel="stylesheet" href="../styles/index.style.css">
    <script src="https://kit.fontawesome.com/29b8768e85.js" crossorigin="anonymous"></script>
  </head>

  <body class="index-body">

    <header>
      <nav>
        <a href="#"><img src="https://i.imgur.com/ijNyFsn.png" alt="festas.com logo" width="215" height="50"></a>
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