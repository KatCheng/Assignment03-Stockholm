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
  <div class=headerbox>
  		<header>
    		<h1>Three Chinese Girls</h1>
    		<span>CSC 174 Assignment 3</span>
  		</header>
  </div>

      <!-- ***Designer should CORRECT THIS: 
      Every design decision should be consistent in 3 websites! e.g. Alignment (center or left), margin and padding of each section. -->
      
  		<?php
  		include "includes/nav.php";
  		?>
      <div class="container">
     <!-- User should be able to know which page they currently at, using JS to indicate current page. The specific location of the navigation bar should be consistent, e.g. included in header box or just below header box. The designer can decide as long as it's consistent.-->

      <!-- PossibleType face could be Montserrat, since it is a san-serif font which conveys a more modern mood-->

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

      <h2>Differences</h2>
      <!-- This differences should be aligned with each other, preferably in same horizontal line, with 3 clear blocks of information (e.g. Grid) -->
      <h3>Charlie Lu</h3>  
      <p>Charlie was from Hangzhou, China.</p>       

      <h3>Xiao Chen</h3>    
      <p>Xiao was from Guangzhou, China.</p>  

      <h3>Valerie Wang</h3>
      <p>Valerie was from Shanghai, China.</p>  
      	  			
      </div>	  		
        
      <?php
          include 'includes/footer.php';
          include 'includes/scripts.php';
          ?>

</body>
</html>