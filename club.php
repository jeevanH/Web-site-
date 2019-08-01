<html>
<body>
<?php
$username = $_POST['username'];
$email = $_POST['email'];
$con = mysqli_connect("localhost","root","","dbmsproject");
if(!$con)
{
    die("Could not connect: ".mysqli_error());
}



$query = "INSERT INTO `club` VALUES ('" . $username . "','". $email ."')";
mysqli_query($con,$query);
echo "succesfully Registerd!!!";
mysqli_close($con);


?>
<br /><a href="/DBMS/form?name=<?php $ureg?>">Go Back</a>;

</body>
</html>
