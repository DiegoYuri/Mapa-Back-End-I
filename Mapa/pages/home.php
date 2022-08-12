  <?php 
 include 'dados/produtos.php';
 include 'function/real.php';?>

  <div class="slider">
  </div>
  <div class="slider--width" style="width: calc(100vw * 2)">
    <div class="slider--item" style="background-image: url('/Mapa/images/3.png');"></div>        
  </div>  
  <h1 class="h1s">MAIS PEDIDOS</h1>
  <p>Comida caseira com AMOR</p>  
  <div class="produtos">
  <?php
    foreach($produto as $pdt):    
  ?>   
   <div class="Marmita">       
        <a id="product" href="index.php?p=produto.php&id=<?=$pdt['id']?>">     
        <img src="<?=$pdt['imagem']?>" style="width:250px; border-radius: 10%;">    
        <p><?=$pdt['nome']?></p>
        <p id="valor"><?=BRL($pdt['valor'])?></p></a>    
    </div>  
  <?php 
  endforeach;?> 
  </div>
</div>
