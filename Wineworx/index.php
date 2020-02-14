<?php

	$title= "Home page";
	$page= "home";
  $herotitle = "";
	$path='./';
	function herobannersetup(){
    $hero='<video class="embed-responsive-item" autoplay loop>
								<source src="assets/images/wineworx_homehero.mp4" type="video/mp4">
					 </video>';
    echo '<div align="center" class="embed-responsive embed-responsive-16by9 p-0 m-0">'.$hero.'</div>';
  }
	include($path.'assets/inc/header.php');

?>


<div class="container inc-margin-container">
<br>
<p>- - 2018 Chilean Wine Making - -</p>
<div class="grid-container">
<div class="grid-item">If you can't wait for the fun and excitement of the Fall harvest, this is your chance to enjoy making wine in the spring.</div>
<div class="grid-item">Grow your grapes in one of the finest viticultural regions of the world: Chile</div>
<div class="grid-item">Wineworx will offer again a wine making experience using fresh juice straight from Chile.</div>
<div class="grid-item">Personalize guidance through all the steps in making delicious South American wine.</div>
<div class="grid-item">As you know the Southern Hemisphere is on a different grape growing schedule which allows us to purchase fresh juices at the close of their growing.</div>
<div class="grid-item">And by initiating the wine making process in late spring you are sure to have a new vintage ready to enjoy the following spring.</div>
</div>
<br>
<figure>
		<img src="./assets/images/Home Page/chilean_wine_making.jpg" alt="Chilean Wine Making" width="50%">
		<figcaption>
				Chilean Wine Making
		</figcaption>
</figure>

<figure>
		<img src="./assets/images/Home Page/cabernet_Franc.jpg" alt="Cabernet Franc" width="50%">
		<figcaption>
				Cabernet Franc
		</figcaption>
</figure>

<figure>
		<img src="./assets/images/Home Page/grape_picking.jpg" alt="Grape Picking" width="50%">
		<figcaption>
				Grape Picking
		</figcaption>
</figure>


<figure>
		<img src="./assets/images/Home Page/riesling_juice.jpg" alt="Riesling Juice" width="50%">
		<figcaption>
				Riesling Juice
		</figcaption>
</figure>

<div class="container">
		<div class="container-item">--Gift Certificates in many denominations--  These are very popular and readily available for any occasions...</div>
</div>
</div>
<br><br>
<?php
	include($path.'assets/inc/footer.php');
?>
