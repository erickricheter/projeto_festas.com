<?php
    $evento = $_POST['evento'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $imagem = $_POST['imagem'];
    echo "Evento: " . $evento . "<br>";
    echo "Descriçao: " . $descricao . "<br>";
    echo "Local: " . $local . "<br>";
    echo "Data: " . $data . "<br>";
    echo "Horário: " . $horario . "<br>";
    echo "Imagem: " . $imagem . "<br>";
    print_r($_POST);
?>