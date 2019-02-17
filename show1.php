<?php
//include 'images.php';

$db = mysqli_connect("localhost","root","","photos");

$sql= "SELECT * FROM images";

$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
	background-image: url( "todo.jpg");
}
	h1{
        font-family: 'Rouge Script', cursive;
         color:#800000;
         text-shadow: 1px 1px 2px #082b34 ;
         font-size: 70px;
          text-decoration: underline;
     }
		p{

		}
  </style>
	<title>FEED 	</title>
</head>
<body>
	<h1>HEY! WELCOME TO YOUR FEED:

	</h1>

<?php
	$i = 1; while ($row = mysqli_fetch_array($result))
	{
		$colour= $row['colour'];
?>

		<div style= "background-color :<?php// echo $colour; ?>" >

<?php
				echo "<div id='img_div'>";
		 		echo "<img src = 'uploads/".$row['image']."'width = 300 height = 200/ >";
			 	//echo "<th colspan=\"8\"><hr width\"100%\"></th>";?>
			 <div style= "background-color :<?php echo $colour; ?>" >

<?php
	 		 echo "<p>".$row['text']."</p>";

			 //echo "<p>".$row['colour']."</p>";
			 echo "<th colspan=\"8\"><hr width\"100%\"></th>";
?>

			</div>

<?php
			echo "<th colspan=\"8\"><hr width\"100%\"></th>";
			echo "</div>";
?>

 			</div>

<?php
	}
?>

</body>
</html>
