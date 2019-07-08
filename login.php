<?php
$connection = mysqli_connect('localhost', 'php', 'default');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'booklocker');
//If selecting the database fails, create it
if (!$select_db){
    $connection->query("CREATE DATABASE booklocker");
}
$connection->query("CREATE TABLE IF NOT EXISTS users (id int AUTO_INCREMENT PRIMARY KEY NOT NULL, username varchar(25), passwordhash VARCHAR(60))");
