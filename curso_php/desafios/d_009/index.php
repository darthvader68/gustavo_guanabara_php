<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //area de declaracoes
        $v1 = $_GET['v1'] ?? 1;
        $p1 = $_GET['p1'] ?? 1;
        $v2 = $_GET['v2'] ?? 1;
        $p2 = $_GET['p2'] ?? 1;
     
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º valor: </label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>" required>
            <label for="p1">1º Peso: </label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>" required>
            <label for="v2">2º valor: </label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>" required>
            <label for="p1">2º Peso: </label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>" required>
            
            <input type="submit" value="Calcular medias">
        </form>
    </main>

    <section>
        <h2>Calculo das medias</h2>
        <?php
            $ma = ($v1 + $v2) / 2;
            $mp = ($v1*$p1 + $v2*$p2) / ($p1 + $p2);

            echo "<p>Analizando os valores $v1 e $v2:</p>";

            echo "<ul><li>A <strong>Media Aritmetica Simples</strong> entre os valores é <strong>".number_format($ma, 2, ",", ".")."</strong></li>";
            echo "<li>A <strong>Media Aritmetica Ponderada</strong> com pesos $p1 e $p2 é <strong>".number_format($mp, 2, ",", ".")."</strong></li></ul>";
        ?>        
    </section>
    
</body>
</html>