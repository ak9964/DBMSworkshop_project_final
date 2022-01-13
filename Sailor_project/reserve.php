<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'rnsit') or die(mysqli_error($dbh));

	$sid = $_REQUEST['sid'];
        $shid = $_REQUEST['shipid'];
        $rd = $_REQUEST['rdate'];
         
    echo "<h3>Data from HTML Form  </h3>";
    echo "Reservation Date: $rd"."<BR>";
    echo "Sailer Id : $sid<BR>";
    echo "Ship Id: $shid<BR>";
  

 
    $sQuery1="SELECT * FROM reserv where sid='$sid' and rdate=STR_TO_DATE('$rd', '%Y-%m-%d')";           
    $sQuery2="SELECT * FROM reserv where shid='$shid' and rdate=STR_TO_DATE('$rd', '%Y-%m-%d')";           
     
if($oResult = mysqli_query($dbh,$sQuery1) and mysqli_num_rows($oResult) > 0) 
  {
  echo"<h3>Sailer Id : $sid is already resereved on $rd.! <br>So, *** Reservation not Possible...! ***</h3>"; 
  echo"<table border size=1>";
  echo"<tr><th>Sailer ID</th> <th>Ship ID</th> <th>Reservation</th></tr>";
  while ($arr=mysqli_fetch_row($oResult))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";
  }

else if($oResult = mysqli_query($dbh,$sQuery2) and mysqli_num_rows($oResult) > 0) 
  {
  echo"<h3>Ship Id : $shid is already resereved on $rd.! <br>So, *** Reservation not Possible...! *** </h3>"; 
  echo"<table border size=1>";
  echo"<tr><th>Sailer ID</th> <th>Ship ID</th> <th>Reservation</th></tr>";
  while ($arr=mysqli_fetch_row($oResult))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";
  }
else 
{
 echo "Reservation Possible....<br> <br>";

 $query = "INSERT INTO reserv VALUES ('$sid', '$shid', STR_TO_DATE('$rd', '%Y-%m-%d'))";
 $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    echo "<h3>Reservation Data Inserted Successfully!!!</h3>";

   $var=mysqli_query($dbh,"SELECT * FROM reserv order by rdate");

  echo"<table border size=1>";
  echo"<tr><th>Sailer ID</th> <th>Ship ID</th> <th>Reservation</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";

}


?>
