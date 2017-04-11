<!DOCTYPE html>
<html>
	<head>
		<?php  $view->inc('elements/header.php'); ?>
	</head>
<body>
 <div class="container" style="position: relative;">
	<div class="row">
       	 <div class="col-md-12" style="min-height: 350px;">
		<?php
	       $a = new Area('Contenu');
	       $a->display($c);
	 ?>
	 </div>
	 	</div>
	 	</div>
</body>
	<?php  $view->inc('elements/footer.php'); ?>
</html>

