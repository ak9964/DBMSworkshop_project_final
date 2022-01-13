<?php								 
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'rnsit') or die(mysqli_error($dbh));
?>
<html>
<body>
<h2> Sailer - Ship Reserve Form </h2>
<form ACTION="reserve.php">
Sailer's Id	
<select name="sid" required>
<option></option>
<?php
$sQuery1="SELECT sid FROM sailer";
$oResult = mysqli_query($dbh,$sQuery1);           
  while ($arr=mysqli_fetch_row($oResult))
   {
   echo"<option>$arr[0]</option>";
   }
?>
</select>

Ship Id
<select name="shipid" required>
<option></option>
<?php
$sQuery1="SELECT shid FROM ship";
$oResult = mysqli_query($dbh,$sQuery1);           
  while ($arr=mysqli_fetch_row($oResult))
   {
   echo"<option>$arr[0]</option>";
   }
?>
</select>
Reserved Date <input type="date" name="rdate" />
<input type=submit value="Reserve"/>
</form>

</body>
</html> 