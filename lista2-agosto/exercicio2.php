<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removendo itens duplicados </title>
</head>
<body>
    // Utilziando o 'arrau_unique' para remover os itens que estão repitindo

    <?php
    function limparLista($lista){
        $listaLimpa = array_unique($lista);
        return $listaLimpa;
    }
    
    // Exemplo utilizando a função criada
    $lista = array(1, 2, 3, 3, 4, 5, 6, 6, 7);
    $listaLimpa = limparLista($lista);

    print_r($listaLimpa);

    
    
    ?>
</body>
</html>