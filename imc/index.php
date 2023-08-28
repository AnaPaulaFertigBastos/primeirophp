<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMC</title>
</head>
<body>
   <h1>IMC</h1>
    <form method="get" action="imc.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome">
        <br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" placeholder="Informe sua idade">
        <br>
        <label for="altura">Altura em metros:</label>
        <input type="text" name="altura" id="altura" placeholder="Informe sua altura em metros">
        <br>
        <label for="peso">Peso em kg:</label>
        <input type="number" name="peso" id="peso" placeholder="Informe sua altura em metros">
        <br>
        <br>
        <button type="submit">Executar</button>
    </form> 
</body>
</html>