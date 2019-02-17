<?php
    $db = mysqli_connect("localhost","root","","photos");
    if(isset($_POST['colour']))
    {
      $sql= "SELECT * FROM images";

      $result = mysqli_query($db, $sql);
      $colour = $_POST['colour'];
      echo $colour;
      echo $_POST['colour'];

      while ($row = mysqli_fetch_array($result))
    	{
    		//$colour= $row['colour'];


    		//<div style= "background-color :<?php// echo $colour;


    				echo "<div id='img_div'>";
    		 		echo "<img src = 'uploads/".$row['image']."'width = 300 height = 200/ >";
    			 	//echo "<th colspan=\"8\"><hr width\"100%\"></th>";?>
    			 <div style= "background-color :<?php echo $colour; ?>" >

    <?php
    	 		 echo "<p>".$row['text']."</p>";

      /*  while ($row = mysqli_fetch_array($result)
        {
          	echo "<div id='img_div'>";
            	echo "<img src = 'uploads/".$row['image']."'width = 300 height = 200/ >";
           echo "<p>".$row['text']."</p>";
          echo "1";
*/
          if($colour == $row['colour'])
          {
              echo $colour;
          }

    //    }
        //if($colour=="#87CEFA")

    //}
echo "</div></div>";
  }
}
  ?>
