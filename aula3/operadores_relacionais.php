<h2>operadores relacionais</h2>
<hr>
<p>
    São operadores utilizados para verificar a relação (maior, menor, diferente) entre valores
</p>

<strong>Operadores</strong><br>
<ol>
    <li>> | maior</li>
    <li>< | menor</li>
    <li>>= | maior igual</li>
    <li><= | menor igual</li>
    <li>== | igual</li>
    <li>!= | diferente</li>
    <li>=== | idêntico - compara valor e tipos</li>
    <li>!== | não idêntico - compara valor e tipo</li>
</ol>
<hr>
<strong>Exemplos</strong>

<pre>
    &lt;?php
        $resposta= 10 == 10;
        var_dump($resposta);
    ?&gt;
</pre>
    <?php
        $resposta= 10 == 10;
        var_dump($resposta);
    ?>
<hr>
<pre>
    &lt;?php
        $resposta= 10 === "10";
        var_dump($resposta);
    ?&gt;
</pre>
    <?php
        $resposta= 10 === "10";
        var_dump($resposta);
    ?>