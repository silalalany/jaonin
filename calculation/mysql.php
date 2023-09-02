<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        $weight_now = mysqli_real_escape_string($conn, $_POST['weight_now']);
        $meal = mysqli_real_escape_string($conn, $_POST['meal']);
        $food = mysqli_real_escape_string($conn, $_POST['food']);
        $fish_amount = mysqli_real_escape_string($conn, $_POST['fish_amount']);
        $size_pond = mysqli_real_escape_string($conn, $_POST['size_pond']);
        $day = mysqli_real_escape_string($conn, $_POST['day']);
        $CITY = mysqli_real_escape_string($conn, $_POST['CITY']);
        $pond = mysqli_real_escape_string($conn, $_POST['pond']);
    }
    
    //$ans = ($weight_now * ($size_fish / 100) ) / $meal;

    if ($weight_now <= 0.5) {
        $p = 15 / 100;
        $m = 4;
        $d = 100 / 100;
    } else if ($weight_now <= 0.9) {
        $p = 10 / 100;
        $m = 4;
        $d = 95 / 100;
    } else if ($weight_now <= 2) {
        $p = 9 /100;
        $m = 4;
        $d = 90 / 100;
    } else if ($weight_now <= 11) {
        $p = 8 / 100;
        $m = 4;
        $d = 85 / 100;
    } else if ($weight_now <= 20) {
        $p = 7 / 100;
        $m = 3;
        $d = 80 /100;
    } else if ($weight_now <= 25) {
        $p = 6 / 100;
        $m = 3;
        $d = 75 / 100;
    } else if ($weight_now <= 75) {
        $p = 4 / 100;
        $m = 3;
        $d = 75 * 95 / 10000;
    } else if ($weight_now <= 250) {
        $p = 3.5 / 100;
        $m = 2;
        $d = 90 * 70 / 10000;
    } else if ($weight_now <= 500) {
        $p = 3 / 100;
        $m = 2;
        $d = 90 * 70 / 10000;
    } else if ($weight_now <= 800) {
        $p = 2 / 100;
        $m = 2;
        $d = 90 * 70 / 10000;
    } else {
        $p = 1.5 / 100;
        $m = 2;
        $d = 88 * 70 / 10000;
    }

    $ans = ($p * $weight_now * $fish_amount * $d) / $m;
    $ans2 = ($p * $weight_now * $fish_amount * $d) / $meal;

    $_SESSION['p'] = $p;
    $_SESSION['m'] = $m;
    $_SESSION['d'] = $d;
    $_SESSION['ans'] = $ans;
    $_SESSION['ans2'] = $ans2;
    $_SESSION['weight_now'] = $weight_now;
    $_SESSION['meal'] = $meal;
    $_SESSION['food'] = $food;
    $_SESSION['fish_amount'] = $fish_amount;
    $_SESSION['size_pond'] = $size_pond;
    $_SESSION['day'] = $day;
    $_SESSION['CITY'] = $CITY;
    $_SESSION['pond'] = $pond;

    $sql = "INSERT INTO data (weight_now, meal, food, fish_amount, size_pond, pond, CITY, day, ans) VALUES ('$weight_now', '$meal', '$food', '$fish_amount', '$size_pond', '$pond', '$CITY', '$day', '$ans')";
   
    mysqli_query($conn, $sql);

    

    header('location: result.php');
?>