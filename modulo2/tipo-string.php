<div class="titulo">Tipos Basicos: String</div>
<h2>String</h2>
<?php
    $a = 'Eu sou uma string'; 
    echo $a."<BR>";
    echo " varDump { ";var_dump('Eu também');echo" }<BR>"; // por conta do UTF-8, acentuação conta 2 caracteres

    echo "<BR>";
    echo "conca"."tenando ".'String com ponto.';
    echo "<BR>";
    echo "'conca"."tenando' ".'"String" com ponto.';

    print("<br>funcao \"print\" serve para imprimir também");
    echo "<BR><i>strtoupper</i>: " . strtoupper('maiusculas');
    echo "<BR><i>strtolower: </i>" . strtolower('MINUSCULAS');
    echo "<BR><i>ucfirst: </i>" . ucfirst('apenas a primeira maiuscula');
    echo "<BR><i>ucwords: </i>" . ucwords('todas as palavras com a primeira letra up');
    echo "<BR><i>Letras: </i>" . strlen('quantas letras têm?');
    echo "<BR><i>Letras(utf-8): </i>". mb_strlen("quantas letras têm?", "utf-8");
    echo "<BR><i>substr: </i>" . substr('Selecionando uma parte',7,5);
    echo "<BR><i>str_replace: </i>" . str_replace('uma','duas','Replace uma de uma partes');
?>
<h2>Desafio - String</h2>
<?php
    // buscar com metodo o trecho 'abc' em '!AbcaBcabc' para obter retorno 1
    echo strpos('!AbcaBcabc','abc') . '<BR>';
    echo stripos('!AbcaBcabc','abc') . '<BR>';
