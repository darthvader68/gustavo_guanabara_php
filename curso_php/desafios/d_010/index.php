<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //area de declaracoes
        $aa = date("Y");
        $an = $_GET['an'] ?? '1900';
        $ano = $_GET['ic'] ?? $aa;   
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="an">Em que ano voce nasceu?</label>
            <input type="number" name="an" id="an" min="1900" value="<?=$an?>" required>
            <label for="ano">Quer saber a sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>" required>
                        
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
            $aa = date("Y");
            $an = 1968;
            $ano = $aa;
            
            $idade = $aa - $an;

            echo "Quem nasceu em $an vai ter <strong>$idade</strong>  anos em <strong>$ano</strong> ";
            
        ?>        
    </section>
    
</body>
</html>