<div class="titulo">API do PHP - Datas</div>

<a href="https://www.php.net/manual/pt_BR/" target="_blank">Manual PHP</a><BR/>
<?php
  $formatoData1 = 'D, d \d\e M \d\e Y';
  $formatoData2 = 'D, d-m-y H:i A';
  $formatoDataHora1 = '%A, %d de %B de %Y %H:%M:%S';

  echo time(),'ms<BR/>';
  echo date($formatoData1),'<BR/>';
  echo date($formatoData2),'<BR/>';
  
  echo strftime($formatoDataHora1,time()),'<BR/>';
  
  date_default_timezone_set("America/Sao_Paulo");
  echo 'date_default_timezone_set=> America/Sao_Paulo: ', strftime($formatoDataHora1,time()),'<BR/>';
  
  setlocale(LC_ALL, 'pt_BR.utf-8');
  echo 'setlocale=> pt_BR.utf-8: ', strftime($formatoDataHora1,time()),'<BR/>';
  
  $proximaSemana = strtotime('+1 week');
  echo 'strtotime=> +1 semana: ', strftime($formatoDataHora1,$proximaSemana ),'<BR/>';
  
  $dataFixa = mktime(15,30,50,8,14,1984);
  echo 'mktime=> 14/08/84 15:30 : ', strftime($formatoDataHora1,$dataFixa ),'<HR/>';
  
  $agora = new DateTime();
  $amanha = new DateTime('+1 day');
  $dataFixa = new DateTime('1984-08-14 15:30:50');
  echo  print_r($agora),'<BR/>';
  echo $agora->format($formatoData2) . '<BR/>';
  echo 'agora: ', strftime($formatoDataHora1,$agora->getTimestamp()),'<BR/>';
  echo 'amanha: ', strftime($formatoDataHora1,$amanha->getTimestamp()),'<BR/>';
  echo 'dataFixa: ', strftime($formatoDataHora1,$dataFixa->getTimestamp()),'<BR/>';
  $dataFixa->modify('+1 day');
  echo 'dataFixa: ', strftime($formatoDataHora1,$dataFixa->getTimestamp()),'<BR/>';
  $dataFixa->setDate(2000,5,20);
  echo 'dataFixa: ', strftime($formatoDataHora1,$dataFixa->getTimestamp()),'<BR/>';
  $dataPassada = new DateTime('2000-05-07');
  $dataPresente = new DateTime('2030-11-26');
  $dataFutura= new DateTime('2035-11-26');

  echo ($amanha > $dataPassada  ? 'Maior' : 'Menor' ) . '<BR/>';
  echo ($amanha > $dataFutura  ? 'Maior' : 'Menor' ) . '<BR/>';
  echo ($dataFixa === $dataFutura  ? 'Igual' : 'Diferente' ) . '<BR/>';
