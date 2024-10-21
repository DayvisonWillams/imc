<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>RESULTADO DO IMC</h1>
    <?php
    $nome = $_GET["nome_usuario"];
    $peso = $_GET["peso"];
    $altura = $_GET["altura"]*0.01;
    
    $imc = $peso/($altura* $altura);

    if($imc <=18.5)
    echo "voce está abaixo do peso" . $imc; 

    else if($imc <=24.9)
    echo "voce está normal " . number_format($imc,2);

    else if($imc <=29.9)
    echo "voce está sobrepeso " . number_format($imc,2);

    else if($imc <=34.9)
    echo "voce esta gordo " . number_format($imc,2);

    else if($imc <=39.9)
    echo "voce esta se tornando um mamute " . number_format($imc,2);

    else 
    echo "voce está se tornando um elgordao " . number_format($imc,2);

    














    ?>

</body>

</html>