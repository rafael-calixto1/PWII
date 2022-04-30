<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            echo "integer <br><br>";
            $n1 = 10;
            $n2 = 30;
            $n3 = 120;
            
            echo $n1. "<br>";
            echo $n2. "<br>";
            echo $n3. "<br><br>";
            
            echo "floats<br>";
            $n11 = 10.01;
            $n21 = 30.001;
            $n31 = 120.001;
            

            echo $n11. "<br>";
            echo $n21. "<br>";
            echo $n31. "<br>";
            

            echo"<br><br>";

            echo"Concatenando a variavel Idade e a varivael com texto<br><br>";
            $idade = 15; $preco = 12.00;
            echo"Ele tem $idade e pagou R$$preco,00 em um lanche<br><br>";


            //ARRAYS
            $array = [1,2,3];
            print_r($array); //apenas para arrays

            echo "<br><br>".$array[2];

            $nome = ["Marcos", 1005, true];

            echo "<br>".$nome[1];

            //crie duas variaveis com numeros
            //crie uma terceira variavel com a soma destes dois numeros

            //Crie um arquivo PHP
            //crie uma operacao com cada um dos operadores basicos 
            //cada operacao deve estar em uma variavel diferente
            //Imprima todas as operacoes que criou
        ?>
</body>
</html>

