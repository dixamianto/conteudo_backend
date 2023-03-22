<h2>Matriz</h2>
<p>
    São estrutura de daods bidimencionais,
    onde é necessário informar 2 indices para realizar 
    o acesso de um valor.
</p>
<p>
    Na prática consiste de um vetor que 
    armazena outros vetores.
</p>
<?php
    $produto1=[
        "nome"=>"Câmera",
        "marca"=>"LG",
        "preco"=>2500
    ];
    $produto2=[
        "nome"=>"notebook",
        "marca"=>"Dell",
        "preco"=>7500
    ];
    $produto3=[
        "nome"=>"Smartphone",
        "marca"=>"Sansung",
        "preco"=>3500
    ];

    $produtos=[
        $produto1,
        $produto2,
        $produto3
    ];

    echo $produtos[1]["marca"];
/*Imprimir todos os valores da matriz, utilizando 
duas estruturas de repetição, 1 para as linhas outra para
as colunas*/

    for($i=0; $i<=2; $i++){
        foreach($produtos[$i] as $k => $v){
            echo $v ."<br>";
            //echo $produtos[$i][$v];
        }
    }echo "<p>&nbsp</p>";

    echo "<table border=1>";
    //outra forma
    foreach($produtos as $produto){
        echo "<tr>";
        echo "<td>" . $produto["nome"] . "</td>";
        echo "<td>" . $produto["marca"] . "</td>";
        echo "<td>" . $produto["preco"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
