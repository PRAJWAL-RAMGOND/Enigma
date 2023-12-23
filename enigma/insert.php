<?php
echo 'inside insert.php'
public function insert($register)
{
  echo 'Inside 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$host = 'localhost:8080';
$username = 'root';
$password = '';
$dbName='1';
}
class DatabaseUtilities
{
  public static function getConnection($dbname)
  {
    $connection=mysqli_connect($host,$username,$password,$dbName);
    //check connection
    if(mysqli_connect_errno())
    {
      echo "Failed to connect to database: ".mysqli_connect_error();
    }
    return $connection;
  }
}


?>