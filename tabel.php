<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> APP BUKU TAMU </title>
</head>

<body>
    <h1> Tabel dalam Database Buku Tamu </h1>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bukuTamu";

        //create connection
        $conn = mysqli_connect($servername, $username, $password,$dbname);

        //check connection
        if(!$conn){
            die("Connection failed : ". mysql_connect_error());
        }

        //create table
        $squery = "CREATE TABLE `dataBukuTamu`( `ID_BT` INT(10) NOT NULL , `NAMA` VARCHAR(200) NOT NULL , 
        `EMAIL` VARCHAR(50) NOT NULL , `ISI` TEXT NOT NULL ) ENGINE = InnoDB;";

        if (mysqli_query($conn,$squery)) {
            echo "New Table 'dataBukuTamu' created successfully";
        } else {
            echo "Error : ".$squery."<br>".mysqli_error($conn);
        }
        
        mysqli_close($conn);
    ?>
</body>
</html>