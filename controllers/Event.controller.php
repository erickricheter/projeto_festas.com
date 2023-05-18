<?php

require_once '../vendor/autoload.php';
require_once __DIR__ . '/../phinx.php';

class EventController
{
    private $pdo;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=development_db';
        $username = 'root';
        $password = '';
        $this->pdo = new PDO($dsn, $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function saveEvent($evento, $descricao, $local, $data, $horario)
    {
        try {
            // inserir os dados SQL
            $sql = 'INSERT INTO evento (evento, descricao, local, data, horario) VALUES (:evento, :descricao, :local, :data, :horario)';
            $stmt = $this->pdo->prepare($sql);

            // consulta com os valores do formulário
            $stmt->execute([
                'evento' => $evento,
                'descricao' => $descricao,
                'local' => $local,
                'data' => $data,
                'horario' => $horario
            ]);
            return true;
        } catch (PDOException $e) {
            // Tratar erro consulta SQL
            echo 'Erro ao salvar os dados: ' . $e->getMessage();
            return false;
        }
    }
    public function getEventsFromDatabase()
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM evento');
            $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $events;
        } catch (PDOException $e) {
            // Tratar erro consulta SQL
            echo 'Erro ao recuperar os eventos: ' . $e->getMessage();
            return [];
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $evento = $_POST['evento'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    // Instanciar o controlador de eventos
    $eventController = new EventController();

    // Salvar o evento no banco de dados
    if ($eventController->saveEvent($evento, $descricao, $local, $data, $horario)) {
        // Redirecionar ou exibir uma mensagem de sucesso, conforme necessário
        header('Location: ../index.php');
        exit();
    } else {
        // O erro já foi tratado dentro do método saveEvent REMOVER
    }
}
