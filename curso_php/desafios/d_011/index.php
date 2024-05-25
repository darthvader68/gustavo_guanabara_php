<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //area de declaracoes
        $price = $_GET['price'] ?? '0';
        $reaj = $_GET['reaj'] ?? '0';   
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="price">Preço do produto (R$)</label>
            <input type="number" name="price" id="price" min="0.10" step="0.01" value=""<?=$price?>>

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value=""<?=$reaj?>>
                        
            <input type="submit" value="Reajustar">
        </form>
    </main>

    

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        $aumento = $price * $reaj / 100;
        $new_price = $price + $reaj;

        echo "O produto que custava R$ ".number_format($price, 2, ",", ".").", com <strong>$reaj % de aumento</strong> , vai passar a custar <strong>R$ $new_price</strong> a partir de agora."                
        ?>          
    </section>

    <script>
        //declaracoes automaticas
        mudaValor()

        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
    
</body>
</html>