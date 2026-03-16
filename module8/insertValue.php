<?php 
requiree "db.php";

$sql = "INSERT INTO users (username, password) 
VALUES ('john','mypassword')";

$pdo ->exec($sql);

echo "new record created succcessfully";
?>