<?php								 
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'rnsit') or die(mysqli_error($dbh));

	$sid = $_REQUEST['shipid'];
        $snm = $_REQUEST['shipname'];
        $cap = $_REQUEST['shipcity'];
        $cap = (int)$cap;

    $query = "INSERT INTO ship VALUES ('$sid', '$snm', '$cap')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    echo "Ship Data Inserted Successfully!!!";

    $var=mysqli_query($dbh,"SELECT * FROM ship");

    echo"<table border size=1>";
    echo"<tr><th>Ship ID</th> <th>Ship Name</th> <th>Ship Port</th></tr>";
    while ($arr=mysqli_fetch_row($var))
    {
      echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
    }
      echo"</table>";
?>
