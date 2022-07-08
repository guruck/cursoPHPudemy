<div class="titulo">Desafio - Switch</div>

<form action="#" method="post">
  <div>
    <label for="slbConv">Converter </label>
    <select name="slbConv" id="slbConv">
      <option value="km-milha" <?= ($_POST['slbConv'] === 'km-milha') ? 'selected' : ''; ?> >Km to Milha</option>
      <option value="milha-km" <?= ($_POST['slbConv'] === 'milha-km') ? 'selected' : ''; ?> >Milha to Km</option>
      <option value="km-metro" <?= ($_POST['slbConv'] === 'km-metro') ? 'selected' : ''; ?> >Km to Metro</option>
      <option value="metro-km" <?= ($_POST['slbConv'] === 'metro-km') ? 'selected' : ''; ?> >Metro to Km</option>
      <option value="cel-fah" <?= ($_POST['slbConv'] === 'cel-fah') ? 'selected' : ''; ?> >Celsius to Fahrenheit</option>
      <option value="fah-cel" <?= ($_POST['slbConv'] === 'fah-cel') ? 'selected' : ''; ?> >Fahrenheit to Celsius</option>
    </select>
    <input type="text" name="param" id="param" placeholder="1" value=<?= is_numeric($_POST['param']) ? $_POST['param'] : 0; ?> />
    <button>Executar</button>
  </div>
  
</form>
<style>
  button, select, input {
    font-size: 1.8rem;
  }
</style>
<?php

  if( isset($_POST['param']) and isset($_POST['slbConv'])){
    $valor = floatval($_POST['param']);
    // var_dump(!!$valor);
    // if (!$valor) return;
    $tipo = '';
    switch ($_POST['slbConv']) {
      case 'km-milha':
        $formula = $valor / 1.60934;
        $resultado = "$valor Km = $formula Milhas";
        break;
      case 'milha-km':
        $formula = $valor * 1.60934;
        $resultado = "$valor Milha = $formula Km";
        break;
      case 'km-metro':
        $formula = $valor * 1000;
        $resultado = "$valor Km = $formula Metros";
        break;
      case 'metro-km':
        $formula = $valor /1000;
        $resultado = "$valor Metros = $formula Km";
        break;
      case 'cel-fah':
        $formula = ($valor * (9/5)) + 32 ;
        $resultado = "$valor ºCelsius = $formula ºFahrenheit";
        break;
      case 'fah-cel':
        $formula = ($valor - 32) * ( 5 / 9 );
        $resultado = "$valor ºFahrenheit = $formula ºCelsius";
        break;
      default:
        $formula = 1;
        break;
    };
    echo "<BR>$resultado";
  };

