<?php
session_start();
echo "WELCOME";
echo $_SESSION['uid'];

 ?>
<!DOCTYPE html>

<html>
<head>
<title>Calendar</title>

<link type="text/css" rel="stylesheet" href="stylehomepage.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="script.js"></script>

</head>

<body><script>
  var year = 2018;
</script>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active"><i class="fa fa-home" style="font-size:28px"></i></a>
  <a href="todo.php" class="active"><i class="fa fa-tasks" style="font-size:28px"></i></a>
  <a href="show1.php" class="active"><i class="fa fa-feed" style="font-size:28px"></i></a>

  <a href="logout.php" class="active"><i class="fa fa-power-off" style="font-size:28px"></i></a>


</div>



<h1 align="center">
<script>
document.write(year);
</script>
</h1>
<table cellpadding=20 style="width:100%;height:960px" id="table1">
<tr>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">January</span>

</div>

 <div id="calendar-dates0">

</div>

</div>

<script>
  calen(0,2018);
</script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">February</span>

</div>

 <div id="calendar-dates1">

</div>

</div>

<script>
calen(1,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">March</span>

</div>

 <div id="calendar-dates2">

</div>

</div>

<script>
calen(2,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">April</span>

</div>

 <div id="calendar-dates3">

</div>

</div>

<script>
calen(3,year);
 </script>

</td>
</tr>
<tr>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">May</span>

</div>

 <div id="calendar-dates4">

</div>

</div>

<script>
calen(4,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">June</span>

</div>

 <div id="calendar-dates5">

</div>

</div>

<script>
calen(5,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">July</span>

</div>

 <div id="calendar-dates6">

</div>

</div>

<script>
calen(6,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">August</span>

</div>

 <div id="calendar-dates7">

</div>

</div>

<script>
calen(7,year);
 </script>

</td>
</tr>
<tr>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">September</span>

</div>

 <div id="calendar-dates8">

</div>

</div>

<script>
calen(8,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">October</span>

</div>

 <div id="calendar-dates9">

</div>

</div>

<script>
calen(9,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">November</span>

</div>

 <div id="calendar-dates10">

</div>

</div>

<script>
calen(10,year);
 </script>

</td>
<td>
<div id="calendar-container">

<div id="calendar-header">

<span id="calendar-month-year">December</span>

</div>

 <div id="calendar-dates11">

</div>

</div>

<script>
calen(11,year);
 </script>

</td>
</tr>
</table>

</body>

</html>
