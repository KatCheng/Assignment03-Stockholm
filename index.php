<!doctype html>
<html lang="en">
<head>
    <?php 
 	include'includes/links.php';
 	?>
	<meta charset="utf-8">
	<title>Team Tokyo's Assignment 3</title>
</head>

<body>
  		<header>
    		<h1>Three Chinese Girls</h1>
    		<span>CSC 174 Assignment 3</span>
  		</header>

  		<?php
  		include "includes/nav.php";
  		?>
      <div class="container">
      <!-- User should be able to know which page they currently at, using JS to indicate current page-->

      <!-- Coder and Designer should implement and design a JS slideshow here -->
      <div class="slides">
      <ul class="rslides">
      <li><img src="images/charlie.jpg" alt="Charlie"></li>
      <li><img src="images/xiao.jpeg" alt="Kat"></li>
      <li><img src="images/valerie.jpg" alt="Valerie"></li>
    </ul>
    </div>

      <h2>Commonality</h2>
      <ul>
      	<li>Girls</li>
      	<li>Chinese</li>
      	<li>Major in Computer Science</li>
      </ul>  	

      <h3>Charlie Lu</h3>      	  		
      <h3>Kat Chen</h3>	      	  		
      <h3>Valerie Wang</h3>
      	  			
      </div>	  		
        
      <?php
          include 'includes/footer.php';
          include 'includes/scripts.php';
          ?>

</body>
</html>