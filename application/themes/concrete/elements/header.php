<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concrete</title>
    <link href="<?= $view->getThemePath()?>../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$view->getThemePath()?>../assets/css/style.css" rel="stylesheet">
    <?php 
    Loader::element('header_required');
    ?>
  </head>
  <body>
 <div class=“c5wrapper”>
  <div class="container">
   <div class="row">
        <div class="col-md-3">
        	 <a href="#"><img src="<?=$view->getThemePath()?>../assets/img/logo.jpg" style="width: 120px" id="logo"></a>
        </div>
        <div class="navigation">
       <div class="col-md-5">
        <?php
        $a = new GlobalArea('navigation');
        $a->display($c);
        ?>
    	    <!--<ul id="navigation">
			  <li><a href="#" title="">HOME</a></li>
			  <li><a href="#" title="">ABOUT US</a></li>
			  <li><a href="#" title="">SERVICES</a></li>
			  <li><a href="#" title="">WORKS</a></li>
			  <li><a href="#" title="">BLOG</a></li>
			  <li><a href="#" title="">PAGES</a></li>
			  <li><a href="#" title="">CONTACT</a></li>
			</ul>-->
        </div>
         <div class="col-md-4">
        <?php
        $a = new GlobalArea('recherche');
        $a->display($c);
        ?>
          <!--<ul id="navigation">
        <li><a href="#" title="">HOME</a></li>
        <li><a href="#" title="">ABOUT US</a></li>
        <li><a href="#" title="">SERVICES</a></li>
        <li><a href="#" title="">WORKS</a></li>
        <li><a href="#" title="">BLOG</a></li>
        <li><a href="#" title="">PAGES</a></li>
        <li><a href="#" title="">CONTACT</a></li>
      </ul>-->
        </div>
     </div>
     </div>
  </div>