<?php
// Connect to the database
require 'connection.php';

$userID = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE user_id = $userID";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
  $username = $result['username'];
  $email = $result['email'];
} else {
  echo "User not found";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Profile</h1>

    <p>Username: <?php echo $username; ?></p>
    <p>Email: <?php echo $email; ?></p>

    </div>
</body>
</html>
