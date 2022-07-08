<div class="titulo">Integração CSS</div>
<h1 center>
  <?php 
    echo 'Olá';
    echo '<small azul>';
    echo ' Mundo!';
    echo '</small>';
  ?>
</h1>

<?= "<div>Outra forma de me 'expressar'!</div>"?>

<div><button dobro><?= date('ymd');?></button></div>

<style>
  button{
      padding: 5px 20px;
      background-color: #<?= date('ymd');?>;
      color: #EEE;
      font-weight: bold;
      border-radius: 10px;
  }
  [center]{
    display: flex;
    justify-content: center;
  }

  [azul]{
    color: #4286f4;
  }

[dobro]{
  font-size: 2rem;
}

</style>