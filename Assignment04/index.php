<?php $currentTitle = 'Home'; include'inc/html-top.inc';?>

        <!--part 1: Overall Introduction-->
        <div class="box4">
        <div class = "centerheader">
        <h1> "Odd Team Member" </h1>
      </div>
    </div>

        <?php include'inc/nav.inc';?>
        <div class="box1">
        <h2> Major, Nationality, Gender </h2>
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

        <!--part 2: Bei Lu -->
        <div class="box2">
        <div class="pic1">
        <img src = "../images/charlie.jpg", title = "BeiLu", alt = "Charlie">
      </div>
        <div class = "textbox">
        <div class = "name">
        <h2><a id = "Charlie"></a>Bei (Charlie) Lu</h2>
      </div>
      <div class="textcentered">
        <div class="pad2">
        <p>Charlie is from Hangzhou, China.</p>
        <p>Charlie is majoring in Computer Science.</p>
        <p>Charlie was a research assistant at Zhejiang University's developmental psychology lab.</p>
      </div>
      </div>
      <div class="button">
        <a href = "#ContactForm">Contact Charlie</a>
      </div>
        <br>
      </div>
      </div>

        <!--part 3: Xiao Cheng -->
        <div class = "box2">
          <div class="pic2">
        <img src = "../images/xiao.jpg", title = "XiaoCheng", alt = "Kat">
      </div>
      <div class="textbox">
        <div class="name">
        <h2><a id = "Kat"></a>Xiao (Kat) Cheng</h2>
      </div>
      <div class="textcentered">
        <div class="pad1">
        <p>Kat is from Guangzhou, China.</p>
        <p>Kat is majoring in Computer Science.</p>
        <p>Kat worked as a workshop leader last semester for the Philosophy Department.</p>
      </div>
      </div>
      <div class="button">
        <a href = "#ContactForm">Contact Kat</a>
      </div>
        <br>
      </div>
      </div>

        <!--part 4: Xuanyang Wang -->
        <div class="box2">
          <div class="pic1">
        <img src = "../images/valerie.jpg", title = "XuanyangWang", alt = "Valerie">
      </div>
      <div class="textbox">
        <div class="name">
        <h2><a id = "Valerie"></a>Xuanyang (Valerie) Wang</h2>
      </div>
      <div class="textcentered">
        <div class="pad2">
        <p>Valerie is from Shanghai, China.</p>
        <p>Valerie is majoring in Computer Science.</p>
        <p>Valerie is working as Vice President and Staff Photographer of UR Photography.</p>
      </div>
      </div>
      <div class="button">
        <a href = "#ContactForm">Contact Valerie</a>
      </div>
        <br>
      </div>
      </div>

        <!--part 5: Alexander Punj -->
        <div class = "box3">
          <div class="pic2">
        <img src = "../images/alex.jpg", title = "AlexanderPunj", alt = "Alexander">
      </div>
      <div class="name">
        <h2><a id = "Alexander"></a>Alexander Punj</h2>
      </div>
      <div class="textcentered">
        <div class ="pad1">
        <p>Alexander is from Ohio, United States.</p>
        <p>Alexander is majoring in Economics.</p>
        <p>Alexander is a freelance audio engineer.</p>
      </div>
      </div>
      <div class="button">
        <a href = "#ContactForm">Contact Alexander</a>
      </div>
      </div>

        <!--part 6: Contact Form -->
        <div class="box3">
          <div class="name">
        <h2><a id = "ContactForm"></a>Contact Form</h2>
      </div>
      <div class="textcentered1">
        <form>
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