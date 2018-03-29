<?php
  // Step 1: Create a database connection
  $dbhost = "66.147.242.186";
  $dbuser = "urcscon3_stockh";
  $dbpass = "coffee1N";
  $dbname = "urcscon3_stockh";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //$insertData = "Hello person";
  $name = Trim(stripslashes($_POST['name']));
  $email = Trim(stripslashes($_POST['email']));
  $content = Trim(stripslashes($_POST['content']));

  // Step 2: Perform teh database query
  $query = "INSERT INTO contact_table (name, email, content) VALUES ('$name', '$email', '$content')";
  $result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Contact Success</title>
      <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Teko" rel="stylesheet">
      <link rel = "stylesheet" type = "text/css" href = "./css/style.css">
  </head>
  <body style="background-color: #60779b">
    <div class="centerbox">
    <div class="small"><p>Thank you for leaving the message!<p><div>
    <span class="bold"><?php echo $name; ?></span> will be in contact with you shortly to the provided email address: <span class="bold"><?php echo $email; ?></span>
    <p> For your information, below is what we have received:<p>
    <div class="bold"><?php echo $content; ?></div><br><br>
  </div>
  <div class="goback">
    <a href="index.php">Go Back to Main Page</a>
  </div>
  </body>
</html>

<?php
  // Step 4: Release returned data
  // mysqli_free_result($result);

  // Step 5: Close database connection
  mysqli_close($connection);
?>
