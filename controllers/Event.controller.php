<?php
class Evento
{
    private $id;
    private $evento;
    private $descricao;
    private $local;
    private $data;
    private $horario;

    public function __construct($evento, $descricao, $local, $data, $horario)
    {
        $this->id = uniqid();
        $this->evento = $evento;
        $this->descricao = $descricao;
        $this->local = $local;
        $this->data = $data;
        $this->horario = $horario;
    }

    // Getter e Setter para cada propriedade, se necessário

    public function toArray()
    {
        return array(
            "id" => $this->id,
            "evento" => $this->evento,
            "descricao" => $this->descricao,
            "local" => $this->local,
            "data" => $this->data,
            "horario" => $this->horario
        );
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperando informações do formulário
    $evento = $_POST["evento"];
    $descricao = $_POST["descricao"];
    $local = $_POST["local"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];

    // Criando um objeto Evento com as informações
    $newEvent = new Evento($evento, $descricao, $local, $data, $horario);

    // Transformando o objeto em um array
    $eventArray = $newEvent->toArray();

    // Transformando o array em JSON
    $jsonEvent = json_encode($eventArray);

    // Redirecionando para o index.php com os dados do evento
    header('Location: ../index.php?event=' . urlencode($jsonEvent));
}
