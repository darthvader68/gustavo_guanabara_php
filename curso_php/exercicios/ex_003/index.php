<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal, 0b = binario, 0 = octal
        //$num = 0x1A;
        //echo "O valor da variavel é $num";
        //resposta: 26

        //$num = 300;
        //echo "O valor da variavel é $num";

        //$v = -19;
        //var_dump($v)   //var_dump - alem de mostrar o valor, mostra o tipo primitivo
        //resposta: int(-19)

        //$num = 3e2;  //3e2 = 3x10 elevado a 2 = 300
        //echo "O valor da variavel é $num";

        //$v = "1024";
        //var_dump($v)
        //resposta: string(4)"1024", nocaso das strings, ainda informa quantos caracterers possui, no caso  (4)

        //$v = 3e2;  //3e2 = 3x10 elevado a 2 = 300
        //var_dump($v)
        /*resposta: float(300), porque as potencias sao consideradas float, a nao ser que seja feita uma coerçao, ou seja, eu forçar para que reconheça outro tipo,
        como no exemplo abaixo*/ 
        
        //$v = (integer) 3e2;  //3e2 = 3x10 elevado a 2 = 300  - coerção
        //var_dump($v);

        //$casado = false;
        //var_dump($casado);
        //resposta; bool(false)

        //$casado = false;
        //print "O valor para casado é $casado";
        //resposta: O valor para casado é 

        //$casado = true;
        //print "O valor para casado é $casado";
        //resposta: O valor para casado é 1

        //$vet = [6, 2, 9, 3, 5];
        //var_dump($vet);
        //resposta: array(5) { [0]=> int(6) [1]=> int(2) [2]=> int(9) [3]=> int(3) [4]=> int(5) }

        //$vet = [6, 2.5, "maria", 3, false];
        //var_dump($vet);
        //resposta: array(5) { [0]=> int(6) [1]=> float(2.5) [2]=> string(5) "maria" [3]=> int(3) [4]=> bool(false) }

        class pessoa {
            private string $nome;
        }

        $p = new pessoa;
        var_dump($p);
        //resposta: object(pessoa)#1 (0) { ["nome":"pessoa":private]=> uninitialized(string) }
    ?>
</body>
</html>