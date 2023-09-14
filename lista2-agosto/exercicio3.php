<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
</head>
<body>
    <?php 
function formatarNomes($nomes) {
    $nomesFormatados = array();

    foreach ($nomes as $nome) {
        $nomeFormatado = ucwords(strtolower($nome)); // Converte para minúsculas e depois capitaliza a primeira letra
        $nomesFormatados[] = $nomeFormatado;
    }

    return $nomesFormatados;
}

// Exemplo:
$nomes = array("derian barbosa ferreira junior", "MARIA DOS SANTOS SOUZA ", "carlos alberto nobrega");
$nomesFormatados = formatarNomes($nomes);

foreach ($nomesFormatados as $nome) {
    echo $nome . "<br>";
}

?>  
</body>
</html>