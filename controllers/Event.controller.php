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

    //Apenas para exemplos
    $eventosExemplos = array(
        array(
            "id" => uniqid(),
            "evento" => "Show do Foo Fighters",
            "descricao" => "Apresentação da banda Foo Fighters em São Paulo",
            "local" => "Estádio do Morumbi",
            "data" => "2023-06-25",
            "horario" => "21:00"
        ),
        array(
            "id" => uniqid(),
            "evento" => "Exposição de arte contemporânea",
            "descricao" => "Exposição de arte contemporânea com obras de artistas brasileiros e internacionais",
            "local" => "Museu de Arte de São Paulo (MASP)",
            "data" => "2023-07-10",
            "horario" => "10:00"
        )
    );
    print_r($newEvent); //Remover
    header('Location: ../index.php');
}
