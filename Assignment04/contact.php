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
  </head>
  <body>
    <p>Thank you for leaving the message!<p>
    <?php echo $name; ?> will be in contact with you shortly to the provided email address: <?php echo $email; ?>
    <p> For your information, below is what we have received:<p>
    <?php echo $content; ?><br><br>
    <a href="index.php">Go Back to Main Page</a>
  </body>
</html>

<?php
  // Step 4: Release returned data
  // mysqli_free_result($result);

  // Step 5: Close database connection
  mysqli_close($connection);
?>
