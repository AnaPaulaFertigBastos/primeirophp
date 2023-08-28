<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sorteio do dado</title>
</head>
<body>
    <!-- 1.Formulário com um botão para executar o sorteio -->
    <h1>Sorteio do Dado</h1>
    <!-- action "vazio" fará com o mesmo arquivo seja executado ao enviar o formulário-->
    <form action="" method="get">
      <button id="blogar" name="jogar" value="jogar" type="submit">
          JOGAR DADO
      </button>
    </form>
    <br>
    <!-- 2. Verificar se foi jogado o dado, testando o valor do campo jogar enviado por GET para a página index.php-->
    <?php
      //testar se o jogar foi criado
      if (!empty($_GET['jogar']) and $_GET['jogar']  == "jogar") {
         echo "Dado arremessado<br><br>";
         //armazena valor sorteado na variável $dado 
         $dado = mt_rand(1,6);
         //Exibe imagem conforme o dado sorteado
         echo "<img src='imagens/$dado.png' width='320px'>";
      } else {
        echo "Clique no botão para jogar";
      }
    ?>
</body>
</html>