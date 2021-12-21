<?php
$email = $_POST["email"] ;
$password = $_POST["password"] ;
$useremail = $_POST["username"] ;
$db = new PDO('mysql:host=mysql1-p2.ezhostingserver.com; dbname=citdemo', 'elms', '');
$stmt = $db->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");

$stmt->bindParam(':username', $_POST["username"] );
$stmt->bindParam(':password',$_POST["password"] );
$stmt->bindParam(':email', $_POST["email"] );
$stmt->execute();
echo "new account haas been created"
?>