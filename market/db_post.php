<?php

    session_start();
    require_once('connection.php');
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_post'])) {
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $meal = mysqli_real_escape_string($conn, $_POST['meal']);
        $food = mysqli_real_escape_string($conn, $_POST['food']);
        $fish_amount = mysqli_real_escape_string($conn, $_POST['fish_amount']);
        $size_pond = mysqli_real_escape_string($conn, $_POST['size_pond']);
        $day = mysqli_real_escape_string($conn, $_POST['day']);
        $CITY = mysqli_real_escape_string($conn, $_POST['CITY']);
        $pond = mysqli_real_escape_string($conn, $_POST['pond']);
    }
    
   

    

    $sql = "INSERT INTO data (weight_now, meal, food, fish_amount, size_pond, pond, CITY, day, ans) VALUES ('$weight_now', '$meal', '$food', '$fish_amount', '$size_pond', '$pond', '$CITY', '$day', '$ans')";
   
    mysqli_query($conn, $sql);

    

    header('location: result.php');
?>