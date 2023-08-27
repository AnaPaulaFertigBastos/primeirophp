<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cálculo da idade</title>
</head>
<body>
    <?php
      function idade($datanascto) {
        //16/02/1878 $datanascto vem no formato dd/mm/aaaa list = separa valores de um array para variáveis
        list($d, $m, $y) = explode("/", $datanascto);
        //Cria nova data no formar Y-m-d
        $date = new DateTime($y.'-'.$m. '-'.$d);
        //
        $intervalo = $date->diff(new DateTime( date('Y-m-d')));
        return $intervalo->format('%Y');

      }
      echo 'Olá '.$_GET['nome'];
      echo "<br>";
      echo "Você nasceu em: ".$_GET['datanascto'];
      echo "<br><br>";
      echo "<a href='index.php'>Voltar</a>"
    ?>
</body>
</html>