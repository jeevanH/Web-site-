<html>
<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$con = mysqli_connect("localhost","root","","dbmsproject");
if(!$con)
{
    die("Could not connect: ".mysqli_error());
}



$query = "INSERT INTO `register` VALUES ('" . $username . "','". $password ."','". $email ."')";
mysqli_query($con,$query);
echo "succesfully Registerd!!!";
mysqli_close($con);


?>
<br /><a href="/DBMS">Go Back</a>
</body>
</html>
