<?php
$sid = $_REQUEST['sid'];
$shid = $_REQUEST['shid'];
$rdate = $_REQUEST['rdate'];
echo "$sid<br>";
echo "$shid<br>";
echo "$rdate<br>";
if(isNotEmpty($sid))
 {
   
   $sQuery1="SELECT * FROM reserv where sid='$sid'";   
   $oResult = mysqli_query($sQuery1);
   echo"<table border size=1>";
   echo"<tr><th>Sailer ID</th> <th>Ship ID</th> <th>Reservation</th></tr>";
   while ($arr=mysqli_fetch_row($oResult))
    {
     echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
    }
   echo"</table>";
 }

 
?>
