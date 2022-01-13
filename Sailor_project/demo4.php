<?php
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"vvfgc");

  $n=$_POST["name"];


  $var=mysqli_query($link,"SELECT * FROM contact WHERE name like '%$n%'");

  if($var==true)
{
  echo"<table border size=1>";
  echo"<tr><th>Name</th> <th>Address 1</th> <th>Address 2</th> 
           <th>E-mail</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td>    
          <td>$arr[3]</td> </tr>";
   }
   echo"</table>";
   mysqli_free_result($var);
}
else
	alert("Name is not there in the database");
   mysqli_close($link);
?>
