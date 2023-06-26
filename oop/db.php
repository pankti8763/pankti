<?php
$host = 'mysql';
$username = 'root';
$password = 'root';
$database = 'new_database';

$conn = new mysqli($host, $username, $password,$database);

// check connection
// $conn->select_db($database);
// if ($conn) {
//      echo "connected";
//    }
//    else{
//    echo "Connection failed";
// }

//create database
// $sql = "CREATE DATABASE $database";
// if ($conn->query($sql) == TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

//delete database
// $sql = "DROP DATABASE $database";
// if ($conn->query($sql) == TRUE) {
//     echo "Database deleted successfully";
// } else {
//     echo "Error deleting database: " . $conn->error;
// }

//create table
// $sql = "CREATE TABLE db_table (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50),
//     email VARCHAR(50)
// )";
// if ($conn->query($sql) == TRUE) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

//edit table
// $sql = "ALTER TABLE db_table ADD COLUMN age INT";
// if ($conn->query($sql) == TRUE) {
//     echo "Table edit successfully";
// } else {
//     echo "Error edit table: " . $conn->error;
// }

//add second table
// $sql2 = "CREATE TABLE db_table1 (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     address VARCHAR(100),
//     phone VARCHAR(20)
// )";
// $conn->query($sql2);

//delete table
// $sql = "DROP TABLE db_table1";
// if ($conn->query($sql) == TRUE) {
//     echo "Table deleted successfully";
// } else {
//     echo "Error deleting table: " . $conn->error;
// }

//update table
$newName = "John Doe";
$newAge = 30;
$id = 1; 

$sql = "UPDATE db_table SET name = '$newName', age = $newAge WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>