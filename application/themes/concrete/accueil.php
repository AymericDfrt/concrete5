<?php  $view->inc('elements/header.php'); ?>

<?php
	     	$a = new Area('diaporama');
	     	$a->enableGridContainer();
	     	$a->display($c);
	     ?>
   <div class="container" style="margin-top: 70px">
   	<div class="row">
       	 <div class="col-md-4">
       	 		<?php
	         	$a = new Area('zone1');
	         	$a->display($c);
	         	?>
        </div>

         <div class="col-md-4">
       	 	<?php
	         	$a = new Area('zone2');
	         	$a->display($c);
	         	?>
        </div>

         <div class="col-md-4">
       	 	<?php
	         	$a = new Area('zone3');
	         	$a->display($c);
	         	?>
        </div>
   	 </div>
   	</div>

  <div id="cta">
	  <div class="container">
	  			<?php
	         	$a = new Area('zone4');
	         	$a->enableGridContainer();
	         	$a->display($c);
	         	?>
	  		</div>
	  </div>
  </div>

  <div class="container">
  	<div class="row">
  	</div>
		<div class="row">
       	<?php
         	$a = new Area('zone5');
         	$a->display($c);
         	?>
 	</div>
  </div>	

<?php  $view->inc('elements/footer.php'); ?>