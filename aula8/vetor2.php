<h2>Vetor indexado por texto</h2>
<pre>
    Os vetores podem usar tetos para
    indexar (identificar) os valores armazenados.
    Exemplo:

            +---------------+
    nome    |Ivan           |
            +---------------+
    nota1   |9              |
            +---------------+
    nota2   |7              |
            +---------------+
</pre>

<?php
$alunos = [
    "nome" => "Iara",
    "nota1"=> 9,
    "nota2"=> 7
];

var_dump($alunos) ; echo "<p>&nbsp</p>";
echo $alunos["nota1"] . "<br><br>";

//Para adicionar um novo valor dentro da variável array
$alunos ["notafinal"] = ($alunos["nota1"] + $alunos["nota2"]); //do professor

//$alunos += ["notafinal" => ($alunos["nota1"] + $alunos["nota2"])]; -> meu jeito estranho

var_dump($alunos); echo "<p>&nbsp</p>";
echo $alunos["notafinal"] . "<br><br>";

echo "<p>&nbsp</p> <pre>";
//imprimir todos os valores de um vetor 
//utilizand foreach
foreach($alunos as $key => $value){ //$key e $value pode ter qualquer nome ("tipo o i de for")
    printf( "%23s \n", "+-----------+ ");
    printf( "%9s| %9s |\n", $key, $value);
}

?>
</pre>
