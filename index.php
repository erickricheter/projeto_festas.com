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
  '/festas.com/login' => 'login.view',
  '/festas.com/eventos' => 'user_events.view',
  '/festas.com/perfil' => 'profile.view',
  '/festas.com/cadastrar' => 'register.view'
];

$path = $_SERVER['REQUEST_URI'];
if (array_key_exists($path, $routes)) {
  $route = $routes[$path];
  require_once 'views/' . $route . '.php';
  exit;
} else {
  require_once 'views/home.view.php';
  exit;
}
