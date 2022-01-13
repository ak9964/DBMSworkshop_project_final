<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'rnsit') or die(mysqli_error($dbh));
?>
<html>
<body>
<h1> Sailer Table </h1>

<?php								 
 $var=mysqli_query($dbh,"SELECT * FROM sailer");

  echo"<table border size=1>";
  echo"<tr><th>Sailer ID</th> <th>Sailer Name</th> <th>Sailer City</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";    
?>

<h1> Ship Table </h1>

<?php								 
 $var=mysqli_query($dbh,"SELECT * FROM ship");

    echo"<table border size=1>";
    echo"<tr><th>Ship ID</th> <th>Ship Name</th> <th>Ship Port</th></tr>";
    while ($arr=mysqli_fetch_row($var))
    {
      echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
    }
      echo"</table>";   
?>

<h1> Sailer Ship Reservation Table </h1>

<?php								 
 $var=mysqli_query($dbh,"SELECT * FROM reserv order by rdate");

  echo"<table border size=1>";
  echo"<tr><th>Sailer ID</th> <th>Ship ID</th> <th>Reservation</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";  
?>
</body>
</html> 