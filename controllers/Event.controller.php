<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperando informações do formulário
    $evento = $_POST["evento"];
    $descricao = $_POST["descricao"];
    $local = $_POST["local"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];

    // criando array com as infos
    $newEvent = array(
        "id" => uniqid(), // Cria um a id unica com base em informações do sistema.
        "evento" => $evento,
        "descricao" => $descricao,
        "local" => $local,
        "data" => $data,
        "horario" => $horario
    );
    // Transforma o array em um JSON 
    header('Location: ../index.php?event=' . urlencode(json_encode($newEvent)));
}
