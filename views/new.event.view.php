<!DOCTYPE html>
<html>

<head>
  <title>Novo Evento</title>
</head>

<body>
  <form method="POST" action="../controllers/Event.controller.php" enctype="multipart/form-data">
    <div>
      <label for="evento">Nome do evento:</label>
      <input type="text" name="evento" required>
    </div>

    <div>
      <label for="descricao">Descrição:</label>
      <input type="text" name="descricao" required>
    </div>

    <div>
      <label for="local">Local:</label>
      <input type="text" name="local" required>
    </div>

    <div>
      <label for="data">Data:</label>
      <input type="date" name="data" required>
    </div>

    <div>
      <label for="horario">Horário:</label>
      <input type="time" name="horario" required>
    </div>

    <div>
      <label for="imagem">Escolha uma imagem:</label>
      <input type="file" name="imagem">
    </div>

    <button type="submit">Enviar</button>
  </form>
  <br>  
</body>

</html>