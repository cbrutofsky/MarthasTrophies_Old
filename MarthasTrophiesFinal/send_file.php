<?php
/*Uses PDO (PHP Data Objects) to connect to MySQL Database
https://www.w3schools.com/php/php_mysql_connect.asp
http://php.net/manual/en/pdo.installation.php
*/
$servername = "localhost"; //marthastrophies.com
$username = "username";//marthacbsi697782
$password = "password";

try{
    $conn = new PDO("msql:host=servername;dbname=myDB", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>