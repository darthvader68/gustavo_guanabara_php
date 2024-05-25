<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    --aqui serao informados os valores digitados pelo usuario--
    <?php 
        //capturando os dados do formulario retroalimentado
        $dividendo = $_GET['d1'] ?? 0; //se nao for digitado nada, aparecera zero
        $divisor = $_GET['d2'] ?? 1; //o valor minimo do divisor sempre sera 1
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" min="0" value="<?=$dividendo?>">

            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar ">
        </form>
    </main>

    <section id="Resultado">
        <h2>Estrutura da divisão</h2>
        <?php 

            //calculos:
            $quociente = intdiv($dividendo, $divisor); //intdiv(divisao de numeros inteiros)
            $resto = $dividendo % $divisor;
         ?>
         
        <table class="divisao">            
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>