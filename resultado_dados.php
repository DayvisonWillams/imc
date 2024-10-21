<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>RESULTADO FINAL</h1>
    <?php
    $nota=$_POST["nota"];

    if ($nota >=7)
        echo "O Aluno " . $_POST["aluno"] . " está aprovado.";
    else if ($nota >=5)
        echo "o aluno" . $_POST["aluno"] . " está em recuperação.";
    else
        echo "o aluno" . $_POST["aluno"] . " está reprovado.";










    ?>
</body>

</html>