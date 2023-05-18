<?php
require_once '../vendor/autoload.php';
require_once __DIR__ . '/../phinx.php';

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupere os valores do formulário
    $evento = $_POST['evento'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    // Conexão com o banco de dados usando PDO
    $dsn = 'mysql:host=localhost;dbname=development_db';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar a consulta SQL para inserir os dados
        $sql = 'INSERT INTO evento (evento, descricao, local, data, horario) VALUES (:evento, :descricao, :local, :data, :horario)';
        $stmt = $pdo->prepare($sql);

        // Executar a consulta com os valores do formulário
        $stmt->execute([
            'evento' => $evento,
            'descricao' => $descricao,
            'local' => $local,
            'data' => $data,
            'horario' => $horario
        ]);

        // Redirecionar ou exibir uma mensagem de sucesso, conforme necessário
        header('Location: ../index.php');
        exit();
    } catch (PDOException $e) {
        // Tratar erros de conexão ou consulta SQL
        echo 'Erro ao salvar os dados: ' . $e->getMessage();
    }
}

// class Evento
// {
//     private $id;
//     private $evento;
//     private $descricao;
//     private $local;
//     private $data;
//     private $horario;

//     public function __construct($evento, $descricao, $local, $data, $horario)
//     {
//         $this->id = uniqid();
//         $this->evento = $evento;
//         $this->descricao = $descricao;
//         $this->local = $local;
//         $this->data = $data;
//         $this->horario = $horario;
//     }

//     // Getter e Setter para cada propriedade, se necessário

//     public function toArray()
//     {
//         return array(
//             "id" => $this->id,
//             "evento" => $this->evento,
//             "descricao" => $this->descricao,
//             "local" => $this->local,
//             "data" => $this->data,
//             "horario" => $this->horario
//         );
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Recuperando informações do formulário
//     $evento = $_POST["evento"];
//     $descricao = $_POST["descricao"];
//     $local = $_POST["local"];
//     $data = $_POST["data"];
//     $horario = $_POST["horario"];

//     // Criando um objeto Evento com as informações
//     $newEvent = new Evento($evento, $descricao, $local, $data, $horario);

//     // Transformando o objeto em um array
//     $eventArray = $newEvent->toArray();

//     // Transformando o array em JSON
//     $jsonEvent = json_encode($eventArray);

//     // Redirecionando para o index.php com os dados do evento
//     header('Location: ../index.php?event=' . urlencode($jsonEvent));
// }
