<?php
// Add Variables 
$servername = "mysql";
$username = "root";
$password = "root";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Creating a database named irailway
$sql = "CREATE DATABASE notes";
if ($conn->query($sql) === TRUE) {
}

// Creating a Table ticket
$sql2 = "CREATE TABLE `notes`.`notes` (`sno` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `tstamp` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) , PRIMARY KEY (`sno`)) ENGINE = InnoDB;";
if ($conn->query($sql2) === TRUE) {
}
