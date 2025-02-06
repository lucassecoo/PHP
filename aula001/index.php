<?php
    // echo 'oii';

    // if(is_int(5)){
    //     echo 'sim';
    // }

    // $var = 10;
    // "a variavel é $var";

    // $arr = ['nome' => 'lucas', 'idade' => 20, 'cor' => 'branco'];
    // echo $arr['nome'];

    class Pessoa{
        function falar(){
            echo "<br>";
            echo 'ola';
            
        }
    }

    $lucas = new Pessoa();
    $lucas -> nome = 'lucas';
    echo "<br>";
    echo $lucas ->nome;

    $lucas-> falar();

    $num = 0;
    switch($num){
        case 0:
            echo "o valor é 0";
            break;
        case 1:
            echo "o valor é 1";
            break; 
    }

while ($num < 10){
    echo $num . "<br>";
    $num = $num + 1;
}

$nomes = ["lucas", "mateus", "caio"];

foreach($nomes as $nome){
    echo "o nome do indice atual é $nome";
}