<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <haeader>
        <h1>Resultado do processamento</h1>
        <main>
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                //verifica se o campo do numero foi preenchido
                if (isset(_GET["numero"]) && is_numeric($_GET["numero"])) {
                    $numero = intval($_GET["numero"]);

                    //calcula o antecessor e o sucessor
                    $antecessor = $numero - 1;
                    $sucessor = $numero + 1;

                    //exibe os resultados
                    echo "<p>O <strong>$numero</strong> escolhido foi: .";
                    echo "<p>O antecessor de <strong>$numero</strong> é: .";
                    echo "<p>O sucessor de <strong>$numero</strong> é: .";
                } else {
                    echo "<p>Por favor, digite um número válido.";
                }
                    
                }
            }
            
            ?>
            <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
            
        </main>
    </haeader>
</body>
</html>
