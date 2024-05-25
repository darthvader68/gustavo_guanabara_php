<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0; //? 0 - se o num nao vier aparecera zero
                $a = $n - 1;
                $s = $n + 1;
                echo "<br>O numero escolhido foi <strong>$n</strong> ";
                echo "<br>O seu antecessor é: <strong>$a</strong> ";
                echo "<br>O seu sucessor é: <strong>$s</strong> ";
            ?>
        </p>
            
        <button onclick="javascritpt:history.go(-1)">&#x2b05; Voltar</button>           
    </main>

</body>
</html>
