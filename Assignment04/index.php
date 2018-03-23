<?php $currentTitle = 'Home'; include'inc/html-top.inc';?>

        <!--part 1: Overall Introduction-->
        <h1> "Odd Team Member" </h1>

        <?php include'inc/nav.inc';?>

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
          <li>Homwtown: Shanghai, China</li>
        </ul>
        <ul>
          <li>Name: Alexander Punj</li>
          <li>Major: Economics</li>
          <li>Homwtown: Iowa, US</li>
        </ul>

        <!--part 2: Bei Lu -->
        <img src = "../images/charlie.jpg", title = "BeiLu", alt = "Charlie">
        <h2><a id = "Charlie"></a>Bei (Charlie) Lu</h2>
        <p>Charlie is from Hangzhou, China.</p>
        <p>Charlie is majoring in Computer Science.</p>
        <p>Charlie was a research assistant at Zhejiang University's developmental psychology lab.</p>
        <a href = "#ContactForm">Contact Charlie</a>
        <br>

        <!--part 3: Xiao Cheng -->
        <img src = "../images/xiao.jpg", title = "XiaoCheng", alt = "Kat">
        <h2><a id = "Kat"></a>Xiao (Kat) Cheng</h2>
        <p>Kat is from Guangzhou, China.</p>
        <p>Kat is majoring in Computer Science.</p>
        <p>Kat worked as a workshop leader last semester for the Philosophy Department.</p>
        <a href = "#ContactForm">Contact Kat</a>
        <br>

        <!--part 4: Xuanyang Wang -->
        <img src = "../images/valerie.jpg", title = "XuanyangWang", alt = "Valerie">
        <h2><a id = "Valerie"></a>Xuanyang (Valerie) Wang</h2>
        <p>Valerie is from Shanghai, China.</p>
        <p>Valerie is majoring in Computer Science.</p>
        <p>Valerie is working as Vice President and Staff Photographer of UR Photography.</p>
        <a href = "#ContactForm">Contact Valerie</a>
        <br>

        <!--part 5: Alexander Punj -->
        <img src = "../images/alex.jpg", title = "AlexanderPunj", alt = "Alexander">
        <h2><a id = "Alexander"></a>Alexander Punj</h2>
        <p>Alexander is from Ohio, United States.</p>
        <p>Alexander is majoring in Economics.</p>
        <p>Alexander is a freelance audio engineer.</p>
        <a href = "#ContactForm">Contanct Alexander</a>

        <!--part 6: Contact Form -->
        <h2><a id = "ContactForm"></a>Contact Form</h2>
        <form>
          <div>
            <label for = "name">To: </label>
            <input type = "text" name = "name" id = "name">
          </div>
          <div>
            <lable for = "email">Your Email Address: </lable>
            <input type = "text" name = "email" id = "email">
          </div>
           <div>
            <lable for = "content">Content: </lable>
            <input type = "text" name = "content" id = "content">
          </div>
          <input type = "submit" value = "Submit">
        </form>
      </body>
      </html>