<div class="titulo">Tipos Basicos: Boolean</div>
<?php
    echo TRUE;
    echo "<BR>";
    echo FALSE;
    echo "<BR>";

    echo "<BR>" . var_dump(true);
    echo "<BR>" . var_dump(false);
    echo "<BR>" . var_dump('true');
    echo "<BR>" . is_bool(true);
    echo "<BR>" . is_bool('true');

    echo '<p>Regras:</p>';
    echo "<BR>(bool) 0 " . var_dump((bool) 0); //apenas zero é false 
    echo "<BR>(bool) 20 " . var_dump((bool) 20);
    echo "<BR>(bool) -1 " . var_dump((bool) -1);
    echo "<BR>(bool) 0.0 " . var_dump((bool) 0.0);
    echo "<BR>(bool) 0.0000000001 " . var_dump((bool) 0.0000000001);
    echo "<BR>(bool) \"\" " . var_dump((bool) ""); //false
    echo "<BR>(bool) \"0\" " . var_dump((bool) "0");//false
    echo "<BR>(bool) \" \" " . var_dump((bool) " ");// todo restante é true
    echo "<BR>(bool) \"00\" " . var_dump((bool) "00");

    echo "<BR>(bool) \"false\" " . var_dump((bool) "false");
    echo "<BR>!!\"false\" " . var_dump(!!"false");
    echo "<BR>";

