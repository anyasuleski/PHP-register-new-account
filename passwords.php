<?php 

$email = $_POST["email"] ;

$db = new PDO('mysql:host=mysql1-p2.ezhostingserver.com; dbname=citdemo', 'elms', '');
$stmt = $db->prepare("SELECT * FROM users WHERE email = :email");

$stmt->bindParam(':email', $_POST["email"] );
$stmt->execute();

$row = $stmt->fetch();
     $username =  $row["username"] ;  
     $password =  $row["password"] ;  

print " $username + $password "
?>