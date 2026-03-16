<?php 
require "db.php";

$sql = "INSERT INTO users (username, password) 
VALUES ('john','mypassword')";

$pdo ->exec($sql);

$last_id = $pdo->lastInsertId();
echo "new record created last id is : " . $last_id;
?>