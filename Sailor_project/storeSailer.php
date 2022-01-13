<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'rnsit') or die(mysqli_error($dbh));

	$sid = $_REQUEST['sid'];
        $snm = $_REQUEST['sname'];
        $adr = $_REQUEST['scity'];
        

    $query = "INSERT INTO sailer VALUES ('$sid', '$snm', '$adr')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    echo "Sailer Data Inserted Successfully!!!";

   $var=mysqli_query($dbh,"SELECT * FROM sailer");

  echo"<table border size=1>";
  echo"<tr><th>Sailer ID</th> <th>Sailer Name</th> <th>Sailer City</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";

echo "thank you for inserting the values @";

$var=mysqli_query($dbh,"SELECT exec_time FROM trigger_time order by exec_time desc limit 1")  or die( mysqli_error($dbh));


  echo"<table border size=1>";
  echo"<tr><th>Date and Time</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td></tr>";
   }
   echo"</table>";
?>
