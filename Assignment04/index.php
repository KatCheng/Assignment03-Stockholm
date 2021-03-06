<?php $currentTitle = 'Home'; include'inc/html-top.inc';?>

        <!--part 1: Overall Introduction-->
        <div class="box4">
        <h1> "Odd Team Member" </h1>
    </div>

        <?php include'inc/nav.inc';?>
        <div class="mainbody">
        <div class="box1">
          <div class = "name">
        <h2> Major, Nationality, Gender </h2>
      </div>
      <div class="list1">
        <ul>
          <li>Name: Bei Lu</li>
          <li>Major: Computer Science</li>
          <li>Hometown: Hangzhou, China</li>
        </ul>
        <ul>
          <li>Name: Xiao Cheng</li>
          <li>Major: Computer Science</li>
          <li>Hometown: Guangzhou, China</li>
        </ul>
      </div>
      <div class="list2">
        <ul>
          <li>Name: Xuanyang Wang</li>
          <li>Major: Computer Science</li>
          <li>Hometown: Shanghai, China</li>
        </ul>
        <ul>
          <li>Name: Alexander Punj</li>
          <li>Major: Economics</li>
          <li>Hometown: Iowa, US</li>
        </ul>
      </div>
      </div>
      </div>

      <br>

        <!--part 2: Bei Lu -->
        <div class="box2">
        <div class="pic1">
        <img src = "../images/charlie.jpg", title = "BeiLu", alt = "Charlie">
      </div>
      <body>
        <div class = "name">
        <h2><a id = "Charlie"></a>Bei (Charlie) Lu</h2>
      </div>
      <div class="textcentered">
        <p>Charlie is from Hangzhou, China.</p>
        <p>Charlie is majoring in Computer Science.</p>
        <p>Charlie was a research assistant at Zhejiang University's developmental psychology lab.</p>
      </div>
    </body>
      <span class="button">
        <a href = "#ContactForm">Contact Charlie</a>
      </span>
        <br>
      </div>
      </div>

      <br>

        <!--part 3: Xiao Cheng -->
        <div class = "box2">
          <div class="pic2">
        <img src = "../images/xiao.jpg", title = "XiaoCheng", alt = "Kat">
      </div>
      <body>
        <div class="name">
        <h2><a id = "Kat"></a>Xiao (Kat) Cheng</h2>
      </div>
          <div class="textcentered3">
        <p>Kat is from Guangzhou, China.</p>
        <p>Kat is majoring in Computer Science.</p>
        <p>Kat worked as a workshop leader last semester for the Philosophy Department.</p>
      </div>
      </body>
      <span class="button">
        <a href = "#ContactForm">Contact Kat</a>
      </span>
        <br>
      </div>
      </div>

      <br>

        <!--part 4: Xuanyang Wang -->
        <div class="box2">
          <div class="pic1">
        <img src = "../images/valerie.jpg", title = "XuanyangWang", alt = "Valerie">
      </div>
      <body>
        <div class="name">
        <h2><a id = "Valerie"></a>Xuanyang (Valerie) Wang</h2>
      </div>
      <div class="textcentered">
        <p>Valerie is from Shanghai, China.</p>
        <p>Valerie is majoring in Computer Science.</p>
        <p>Valerie is working as Vice President and Staff Photographer of UR Photography.</p>
      </div>
    </body>
      <span class="button">
        <a href = "#ContactForm">Contact Valerie</a>
      </span>
        <br>
      </div>
      </div>

      <br>

        <!--part 5: Alexander Punj -->
        <div class = "box3">
          <div class="pic2">
        <img src = "../images/alex.jpg", title = "AlexanderPunj", alt = "Alexander">
      </div>
      <body>
      <div class="name1">
        <h2><a id = "Alexander"></a>Alexander Punj</h2>
      </div>
      <div class="textcentered2">
        <p>Alexander is from Ohio, United States.</p>
        <p>Alexander is majoring in Economics.</p>
        <p>Alexander is a freelance audio engineer.</p>
      </div>
    </body>
      <span class="button2">
        <a href = "#ContactForm">Contact Alexander</a>
      </span>
      </div>

      <br>

        <!--part 6: Contact Form -->
        <div class="box5">
          <div class="name1">
        <h2><a id = "ContactForm"></a>Contact Form</h2>
      </div>
      <div class="textcentered1">
        <form method="post" action="contact.php">
          <div>
            <label for = "name">To: </label>
            <br>
            <input type = "text" name = "name" id = "name">
          </div>
          <div>
            <lable for = "email">Your Email Address: </lable>
            <br>
            <input type = "text" name = "email" id = "email">
          </div>
           <div>
            <lable for = "content">Content: </lable>
            <br>
            <input type = "text" name = "content" id = "content">
          </div>
          <input type = "submit" value = "Submit">
        </form>
      </div>
    </div>

      </body>
      </html>
