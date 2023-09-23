<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Testes de Tipos Primitivos</h1>
    <?php 
    /// 0x= hexadecimal 0b= binario 0=octal
    //$num=0b1010;
    // $num=010;
    // echo "O valor da variavel é $num";
    // $v=300;
    // var_dump($v);
    ///$num=(integer)3e2; ///3x10(2) //coercao
    // echo "O valor é $num"; 
    // var_dump($num);
    // $num=(int)"950"; 
    // var_dump($num);
    // $casado=true;
    // var_dump($casado);
    // print "O valor para casado é $casado"
    // $vet=[6,2.5,9,3,5];
    // $vet=[6, 2.5, "Maria", 3, false];
    // echo "O valor é $vet";
    // var_dump($vet);
    class Pessoa{

        private string $nome;
    }
    $p=new Pessoa;
    var_dump($p);

    ?>
</body>
</html>