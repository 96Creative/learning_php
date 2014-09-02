<?php
/*
$db = new InnoDB("mysql:host=91.208.99.2:3349;dbname=zsoltpap_php",
➥ "zsoltpap_me", "Dr11crz@");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
try {
 $queryStr = "CREATE TABLE users (id INTEGER NOT NULL 
➥AUTO_INCREMENT PRIMARY KEY, name VARCHAR(40), password 
➥VARCHAR(100), email VARCHAR(150))";
 $db->query($queryStr);
} catch (PDOException $e) {
 echo $e->getMessage();
}
*/

$mysql_host = '91.208.99.2:3349';
$mysql_user = 'zsoltpap_me';
$mysql_pass = 'Dr11crz@';
mysql_connect($mysql_host, $mysql_user, $mysql_pass);

?>