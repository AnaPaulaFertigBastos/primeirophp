<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    $sorteado = rand(1,6);
    if ($sorteado==1) {
      $link = "https://static.thenounproject.com/png/399016-200.png";
    } else if ($sorteado==2) {
      $link = "https://static.thenounproject.com/png/399015-200.png";
    } else if ($sorteado==3) {
      $link = "https://static.thenounproject.com/png/399017-200.png";
    } else if ($sorteado==4) {
      $link = "https://static.thenounproject.com/png/399018-200.png";
    } else if ($sorteado==5) {
      $link = "https://static.thenounproject.com/png/399030-200.png";
    } else {
      $link = "https://static.thenounproject.com/png/399031-200.png";
    }
    
    // switch ($sorteado) {
    //   case 1:
    //     $link = "https://static.thenounproject.com/png/399016-200.png";
    //   case 2:
    //     $link = "https://static.thenounproject.com/png/399015-200.png";
    //   case 3:
    //     $link = "https://static.thenounproject.com/png/399017-200.png";
    //   case 4:
    //     $link = "https://static.thenounproject.com/png/399018-200.png";
    //   case 5:
    //     $link = "https://static.thenounproject.com/png/399030-200.png";
    //   case 6:
    //     $link = "https://static.thenounproject.com/png/399031-200.png";
    //     break;
    //   default:
    //     $link = "https://static.thenounproject.com/png/399016-200.png";
    //     break;
    // }

    echo '<img src="'.$link.'">'
  ?>

</body>
</html>