<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include "./inc/Config.inc.php";

$turma  = new Turma("Vitor",3301,"Juan");
$mensal = new Pagamento("San Diego",400);

echo $turma->verTurma();
echo $mensal->verPagamento();
echo "<hr>";

$turma  = new Turma("Rodrigo",3302,"Juan");
$mensal = new Pagamento("San Diego",400);

echo $turma->verTurma();
echo $mensal->verPagamento();
echo "<hr>";

$turma  = new Turma("Julia",3303,"Juan");
$mensal = new Pagamento("San Diego",400);

echo $turma->verTurma();
echo $mensal->verPagamento();
echo "<hr>";




?>
    
</body>
</html>