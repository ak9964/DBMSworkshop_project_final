<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'vvfgc') or die(mysqli_error($dbh));

	$nme = $_POST['name'];
        $ad1 = $_POST['add1'];
        $ad2 = $_POST['add2'];
        $eml = $_POST['email'];

    $query = "INSERT INTO contact VALUES ('$nme', '$ad1', '$ad2', '$eml')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    echo "Data Inserted Successfully!!!"
?>
