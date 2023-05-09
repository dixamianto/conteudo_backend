<?php

$p1 = [
    "nome" => "Ana",
    "cpf" => "123.123.123-11"
];

$p2 = [
    "nome" => "Mia",
    "cpf" => "321.321.321-22"
];

$pessoas = [$p1, $p2];

//Questão 19.a

echo $pessoas[0]['nome'] . "<br>";
echo $pessoas[1]['nome'] . "<br>";

//Questão 19.b

foreach($pessoas as $value){
    echo $value['cpf'] . "<br";
}