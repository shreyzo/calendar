<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>

body
{               width:100%;

    height:;
                overflow: auto;
                 font-family: arial black;
background-image: url(todo.jpg);
	margin-left: auto;
    margin-right: auto;
	background-size: ;
	background-position: ;
             margin: 0px auto;
}
.mood{

}
table{
align:center;
width: 100%;
padding-left: 40px;
}
th, td{
	border: none;
    height: px;
    padding: 5px;
}
  .amazing {
    background-color: #F4753E;
    border : none
    color: white;
    padding : 60px 60px;
    text-align: center;
    text-decoration: ;
    display : inline-block;
    font-size: 20px;
    margin : px px;
    cursor: pointer;
     border-radius: 50%;
font-family: Segoe Print;
width: 200px;
    height: 200px;

  }
  .happy
{  background-color: #FFDAB9;   padding : 60px 60px;  border-radius: 50%;font-family: Segoe Print;
font-size: 20px;width: 200px;cursor: pointer;
    height: 200px;}
  .sad
{  background-color:#BDB76B;   padding : 60px 60px; border-radius: 50%;font-family: Segoe Print;font-size: 20px;width: 200px;cursor: pointer;
    height: 200px;}
  .satisfactory
{  background-color: #7CFC00;   padding : 30px 30px; border-radius: 50%;font-family: Segoe Print;font-size: 20px;width: 200px;cursor: pointer;
    height: 200px;}
  .normal
{  background-color: #87CEFA;   padding : 60px 60px; border-radius: 50%;font-family: Segoe Print;font-size: 20px;width: 200px;cursor: pointer;
    height: 200px;}
  .productive
{  background-color: #A52A2A;   padding : 40px 40px; border-radius: 50%;font-family: Segoe Print;font-size: 20px;width: 200px;cursor: pointer;
    height: 200px;}
  .fantastic
{  background-color: #FF00FF;   padding : 40px 40px; border-radius: 50%;font-family: Segoe Print;font-size: 20px;width: 200px;cursor: pointer;
    height: 200px;}
.angry
{  background-color: #d41e1e;   padding : 40px 40px; border-radius: 50%;font-family: Segoe Print;font-size: 20px;width: 200px;cursor: pointer;
    height: 200px;}

<?php //img{height: 30px;}?>
 .abc{
        background-color: #d3d3d3;
         color:#000;
background-image: url(.jpg);
         text-shadow: 1px 1px 2px #082b34 ;
         font-size: 28px;
          text-align: align;
          text-decoration: ;padding : 10px 10px;font-family: Lucida handwriting;
width: 200px;
    height: 200px;
border-radius: 10px;
border: 0px solid #ccc;
     }
  </style>
</head>
<body>

<table>
<form action= "images.php" method="post" class="mood"><tr><td>
  <button name="colour" class="amazing" type="submit" value=" #F4753E">AMAZING <i class="material-icons" style="font-size:28px">sentiment_very_satisfied</i></button></td>
  <td><button name="colour" class="happy" type="submit" value="#FFDAB9">HAPPY <i class="fa fa-smile-o" style="font-size:28px"></i></button></td>
  <td><button name="colour" class="sad" type="submit" value="#BDB76B">SAD <i class="fa fa-frown-o" style="font-size:28px"></i></button></td>
<tr>
  <td><button name="colour" class="satisfactory" type="submit" value="#7CFC00">SATISFACTORY <i class="material-icons" style="font-size:28px">sentiment_satisfied</i></button></td>
<td><div class="abc">Paint your calendar with your moods   <i class="fa fa-paint-brush" style="font-size:28px"></i>

  </div></td>
<td><button name="colour" class="angry" type="submit" value="#d41e1e">ANGRY <br><img src=""></button></td></tr>
 <tr><td> <button name="colour" class="normal" type="submit" value="#87CEFA">NORMAL <i class="material-icons" style="font-size:28px">sentiment_neutral</i></button></td>
 <td> <button name="colour" class="productive" type="submit" value="#A52A2A">PRODUCTIVE <i class="fa fa-thumbs-o-up" style="font-size:28px"></i></button></td>
  <td><button name="colour" class="fantastic" type="submit" value="#FF00FF">FANTASTIC <i class="fa fa-heart" style="font-size:28px"></i></button></td></tr>

</form> <?php //header("Location: colour1.php");?>


</table>
</body>
</html>
