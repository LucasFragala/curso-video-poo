<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    require_once 'contabanco.php';
    $p1 = new ContaBanco(); //Lucas
    $p2 = new ContaBanco(); // Fernanda
    $p1->abrirConta("CC");
    $p1->setNumConta("09321");
    $p1->setDono("Lucas");
    $p2->abrirConta("CP");
    $p2->setNumConta("06925");
    $p2->setDono("Fernanda");

    $p1->depositar(300);
    $p2->depositar(500);

    $p2->sacar(200);
    $p2->sacar(200);

    print_r($p1);
    print_r($p2);
?>
</body>
</html>