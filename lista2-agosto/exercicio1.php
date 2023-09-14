<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
function xadrezTorre($x1,$x2,$y1,$y2){
  if ($x1 === $x2 || $y1 === $y2){
    echo "A torre inimiga está no alcance para ser atacada(True)";
  } else {
    echo "A torre inimiga não está no alcance(False)";
  }
}
$resultado = xadrezTorre(6 , 7, "c", "d");
echo $resultado;
?>
</body>
</html>