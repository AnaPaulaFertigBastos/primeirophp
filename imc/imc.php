<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cálculo de IMC</title>
</head>
<body>
    <?php
      function imc($peso, $altura) {
        $indice = $peso/($altura * $altura);
        return $indice;
      }

      echo 'Olá '.$_GET['nome'];
      echo "<br>";
      echo 'Você tem '.$_GET['idade'].' anos';
      echo "<br>";
      echo 'Você tem '.$_GET['peso'].' kg';
      echo "<br>";
      echo 'Você tem '.$_GET['altura'].' metros';
      echo "<br><br>";
      $indice = imc($_GET['peso'], $_GET['altura']); 
      echo "Seu IMC é de: " . $indice;
      echo "<br>";
      echo "Pode ser classificado em: " . classificar($indice);

      function classificar($indice) {
        if ($indice < 18.5) {
            return "Abaixo do peso.";
        } else if ($indice < 25) {
            return "Peso normal.";
        } else if ($indice < 30) {
            return "Pré-obesidade.";
        } else if ($indice < 35) {
            return "Obesidade Grau 1.";
        } else if ($indice < 40) {
            return "Obesidade Grau 2.";
        } else {
            return "Obesidade Grau 3.";
        }
    }

      echo "<br><br>";
      echo "<a href='index.php'>Voltar</a>";
      echo "<br><br>";
    ?>
</body>
</html>