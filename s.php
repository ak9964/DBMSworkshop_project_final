<html>
 <body>

  <?php
  echo "My first PHP script!";
  $dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
  
  mysqli_select_db($dbh,'workshopise') or die(mysqli_error($dbh));
  
     $fn=$_REQUEST['fn'];
     $ln=$_REQUEST['ln'];
     $marks=$_REQUEST['marks'];
     $percentage=null;

  $query="insert into student values('$fn','$ln','$marks','$percentage')";
  $result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
  echo "DATA INSERTED SUCCESFYLLY!!";

 $var=mysqli_query($dbh,"select *from student");
 
 echo"<table border size=1>";
 echo"<tr><th>fn</th> <th>ln</th> <th>Marks</th><th>percentage</th></tr>";
 
 while ($arr=mysqli_fetch_row($var))
 {
  echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
 }
 echo"</table>";
  ?>
<a href="index.html">Click Here for Home Page</a>
 </body>
</html>