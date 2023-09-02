<?php
    //$servername = "localhost";
    //$username = "u857186656_data_food";
    //$password = "JaoNin123";
    //$dbname = "u857186656_data_food";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    //Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check conn
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
    else {
        echo "Connection successfully";
    }
?>