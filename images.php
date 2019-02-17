<?php

global $colour;
$colour= $_POST['colour'];
//echo $colour;
session_start();
$_SESSION['back']= $colour;

  ?>

<!DOCTYPE html>
<html>
<head>
  <title>IMAGE UPLOAD</title>
  <link type="text/css" rel="stylesheet" href="styleimage.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    background-color: <?php echo $colour; ?>;
  }
  </style>
</head>
</body>
  <div id="content">
    <form method="post" action=images1.php enctype="multipart/form-data">
      <input type ="hidden" name="size" value="10000000">
      <div>
        <input type="file" name="image">
      </div>
      <div id="abc">
        <textarea name="text" cols="25" rows="17" placeholder="How was your day">
        </textarea>
      </div>
      <div>
          <button class="imgbtn" name="upload"><i class="fa fa-image" style="font-size:24px"></i></button>
      </div>
      <div>
        <input type="text" name="Date" placeholder="Date in format DDMMYYYY">
      </div>
    </form>
  </div>
</head>
</html>
