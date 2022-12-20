<?php
// Add Variables 
$servername = "mysql";
$username = "root";
$password = "root";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Creating a database named irailway
$sql = "CREATE DATABASE notes";
mysqli_query($conn, $sql);

// Creating a Table ticket
$sql2 = "CREATE TABLE `notes`.`notes` (`sno` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `tstamp` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) , PRIMARY KEY (`sno`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql2);

mysqli_close($conn);