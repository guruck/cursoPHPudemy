<div class="titulo">Comentarios PHP</div>

<?php
echo "comentario é realizado com dupla barra //";
//echo 'teste comentando'; fraco não impede fechamento ?>

<!-- <h2>esse comentario é em HTML, sera visivel no codigo do browser</h2> -->

<?php
echo "<BR>também faz-se com cerquilha #";
#echo "mais um comentario"; fraco não impede fechamento ?>

<?php
echo "<BR> para comentar multiplas linhas usar /* */";

/**
 * aqui é um comentario grande
 * de multiplas linhas, pode ser usado para Documentação
 * ?> não fecha o bloco dentro desse tipo de comentário
 * todo comentario PHP não vai para o source do Browsers
*/
?>