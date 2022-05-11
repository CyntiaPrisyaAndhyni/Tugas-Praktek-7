<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> APP BUKU TAMU </title>
</head>
<body>
    <h1> Database Buku Tamu </h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        //create connection
        $conn = mysqli_connect($servername, $username, $password);
        //check connection
        if(!$conn){
            die("Connection failed : ". mysql_connect_error());
        }
        //create database
        $sql = "CREATE DATABASE bukuTamu";
        if ( mysqli_query ($conn, $sql )){
            echo " Database created succesfully ";
        } else {
            echo " Error creating database : " . mysql_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>