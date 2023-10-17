<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Projeto controle remoto</h1>
<pre>
    <?php
        require_once 'ControleRemoto.php';
        echo "<p>------Menu------</p>";
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->abrirMenu();
        
    
    ?>
</pre>

</body>
</html>