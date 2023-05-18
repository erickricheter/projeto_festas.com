<?php

require_once __DIR__ . '/../vendor/autoload.php';
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

    public function deleteEvent($event_id)
    {
        try {
            $sql = 'DELETE FROM evento WHERE id = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $event_id]);
            return true;
        } catch (PDOException $e) {
            // Tratar erro consulta SQL
            echo 'Erro ao excluir o evento: ' . $e->getMessage();
            return false;
        }
    }

    public function saveEvent($evento, $descricao, $local, $data, $horario)
    {
        try {
            $sql = 'INSERT INTO evento (evento, descricao, local, data, horario) VALUES (:evento, :descricao, :local, :data, :horario)';
            $stmt = $this->pdo->prepare($sql);

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
    if (isset($_POST['event_id'])) {
        $event_id = $_POST['event_id'];
        $eventController = new EventController();

        if ($eventController->deleteEvent($event_id)) {
            header('Location: ../index.php');
            exit();
        } else {
            header('Location: ../index.php');
            exit();
        }
    } else {
        $evento = $_POST['evento'];
        $descricao = $_POST['descricao'];
        $local = $_POST['local'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $eventController = new EventController();

        if ($eventController->saveEvent($evento, $descricao, $local, $data, $horario)) {
            header('Location: ../index.php');
            exit();
        } else {
            header('Location: ../index.php');
            exit();
        }
    }
}
