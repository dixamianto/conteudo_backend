<p>
    São utilizados para armazenar 
    "atribuir valores a uma variável"
</p>

<ol>
    <li>= | atribuição simples</li>
    <li>+= | acumula o novo valor</li>
    <li>-= | subtrai o valor da variável</li>
    <li>++ | incrementa 1 ao valor da variável</li>
    <li>-- | subtrai 1 ao valor da variável</li>
    <li>.= | concatena o texto ao valor da variável</li>
</ol>

<strong>Exemplos</strong><br>
<?php
    $nota = 5 ; //atribui o número 5 na variavel
    echo $nota . "<br>"; //imprime o número 5

    $nota += 5; //soma +5 na variável nota
    echo $nota . "<br>"; //imprimi o número 10 (5 de antes + 5 de agora)

    $nota -= 2; //equivalente a $nota = $nota - 2;
    echo $nota . "<br>"; //imprime o valor 8

    $nota++; //soma 1 ao valor da variável = $nota = $nota + 1;
    echo $nota . "<br>"; //imprimi o valor 9

    $nota--; //subtrai 1 ao valor da variável = $nota = $nota - 1;
    echo $nota . "<br>"; //imprimi o valor 8

    $nome = "Iara";
    $nome .= " Ribeiro";//concatena o valor anterior Iara, com o novo valor Ribeiro armazena na variável nome
    echo $nome . "<br>"; // imprime Iara Ribeiro
?>
