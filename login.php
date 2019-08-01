<html>
<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
/*
$con = mysqli_connect("localhost","root","","dbmsproject");
if(!$con)
{
    die("Could not connect: ".mysqli_error());
}*/

$rs=login($username,$password);

function login($username, $password)
{

    $mysqli = new mysqli("localhost","root","","dbmsproject");
    $query = 'SELECT username FROM register WHERE username=? AND password=?';

    if($stmt = $mysqli->prepare($query)){
      $stmt->bind_param('ss', $username, $password);
      $stmt->execute();
      $stmt->store_result();
      $num_row = $stmt->num_rows;
      $stmt->bind_result($username);
      $stmt->fetch();
      $stmt->close();
    }else die("Failed to prepare query");


    if( $num_row === 1 ) {
      $_SESSION['userid'] = $username;
      echo ($username);
      redirect("/DBMS/form.php",$username);
      return true;
    }
    echo ("Invalid credentials. Try again!");

    return false;

}

function redirect($url,$name) {
    ob_start();
    header('Location: '.$url."?name=".$name);
    ob_end_flush();
    die();
}
?>
<br /><a href="/DBMS/javaclub">Go Back</a>
</body>
</html>
