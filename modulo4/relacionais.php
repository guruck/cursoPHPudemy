<div class="titulo">Operadores Relacionais</div>

<?php
  echo "( 1 == 1 )<BR>".var_dump( 1 == 1 );
  echo "( 1 > 1 )<BR>".var_dump( 1 > 1 );
  echo "( 1 >= 1 )<BR>".var_dump( 1 >= 1 );
  echo "( 4 < 1 )<BR>".var_dump( 4 < 1 );
  echo "( 1 <= 1 )<BR>".var_dump( 1 <= 1 );
  echo "( 1 != 1 )<BR>".var_dump( 1 != 1 );
  echo "( 1 <> 1 )<BR>".var_dump( 1 <> 1 );
  echo "( 1 === 1 ) \/extritamente igual<BR>".var_dump( 1 === 1 );
  echo "( 1 === '1' ) \/extritamente igual<BR>".var_dump( 1 === '1' );
  echo "( 1 !== 1 ) \/extritamente diferente<BR>".var_dump( 1 !== 1 );
  echo "( 1 !== '1' ) \/extritamente diferente".var_dump( 1 !== '1' );
?> <HR>
<?php
  echo "<h3>Parte2 - Spaceship</h3>";
  echo "( 1 <=> 1 )<BR>".var_dump( 1 <=> 2 );
  echo "( 1 <=> 2 )<BR>".var_dump( 1 <=> 1 );
  echo "( 2 <=> 1 )<BR>".var_dump( 2 <=> 1 );

  echo "( !!5 )<BR>".var_dump( !!5 );
  echo "( !!'' )<BR>".var_dump( !!"" );
  echo "( !!(-1) )<BR>".var_dump( !!(1<=>2) );
  echo "( !!0 )<BR>".var_dump( !!0 );
