<?php namespace App; ?>
<div class="titulo">Sub-Namespace</div>

<?php
  const CONSTANTE1 = 123;
  
  echo 'Namespace: '. __NAMESPACE__ . '<BR/>';
  echo 'CONSTANTE1: '. CONSTANTE1 . '<BR/>';
  
  namespace App\Principal;
  const CONSTANTE1 = 234;
  echo 'Namespace: '. __NAMESPACE__ . '<BR/>';
  echo 'CONSTANTE1: '. CONSTANTE1 . '<BR/>';
  
  namespace App\Principal\Especifico;
  const CONSTANTE1 = 345;
  echo 'Namespace: '. __NAMESPACE__ . '<BR/>';
  echo 'CONSTANTE1: '. CONSTANTE1 . '<BR/>';
  echo '<HR/>';
  echo '\App\CONSTANTE1: '. \App\CONSTANTE1 . '<BR/>';
  echo '\App\Principal\CONSTANTE1: '. \App\Principal\CONSTANTE1 . '<BR/>';
  echo '\\' . __NAMESPACE__ . '\CONSTANTE1: '. constant('\\'.__NAMESPACE__.'\CONSTANTE1') . '<BR/>';
  