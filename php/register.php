<?php
include('connection.php');
$uname1 = $_POST['name'];
$email  = $_POST['mail'];
$email  = $_POST['pwd'];






if (!empty($name) || !empty($mail) || !empty($pwd))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "task";




$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register (name ,mail,pwd ) values(?,?,?)";


     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $mail);
     $stmt->execute();
     $stmt->bind_result($mail);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

 
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $name,$mail,$pwd);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>


