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
        <h1>Conversor de Moedas</h1>
        <?php 
        //cotacao vinda da api do banco central:
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $real = $_GET["din"] ?? 0;
        $dolar = $real / $cotacao;
        
        $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD"). "</strong></p>";
        
        /*CONVERSOR TRADICIONAL:
        echo "Seus R$ " . number_format($real, 2, ",", ".") . " equivalem a U$ " . number_format($dolar, 2, ",", ".");*/
       
        /*formatacao de moedas com internacionalizacao:
        BLIBLIOTECA INTL (internalization PHP)
        //brasil:*/
        
        
        /*estados unidos
        $padrao = numfmt_create("us", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");*/
        
        /*russia
        $padrao = numfmt_create("ru_RU", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");*/
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>
</html>
