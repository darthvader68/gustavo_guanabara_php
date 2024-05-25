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
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
	        $min = 0;
	        $max = 100;	
	        $na = mt_rand($min, $max);
            //rand() - 1951 linear congrential generator
            //mt_rand() - 1997 marseene twister (é 4x mais rapido)
            //a partir do PHP 7.1, rand() é um simples apontamento para o mt_rand()
            //random_it() gera numeros aleatorios criptograficamente seguros
	
	        echo "Gerando um numero aleatorio entre 0 e 100: \n";
	        echo "<p>O numero gerado foi <strong>$na</strong></p>";
        ?>     
        <button onclick="javasctipt:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
    
</body>
</html>