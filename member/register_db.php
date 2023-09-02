<?php
    
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $province = mysqli_real_escape_string($conn, $_POST['province']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $locality = mysqli_real_escape_string($conn, $_POST['locality']);
        $postal = mysqli_real_escape_string($conn, $_POST['postal']);
        $lat = mysqli_real_escape_string($conn, $_POST['lat']);
        $lng = mysqli_real_escape_string($conn, $_POST['lng']);

        $user_check_query = "SELECT * FROM user WHERE phone = '$phone' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['phone'] === $phone) {
                array_push($errors, "เบอร์นี้มีคนใช้ไปเเล้ว");
            }
        }

        if (count($errors) == 0) {
            $password = $password_1;

            $sql = "INSERT INTO user (name, lastname, phone, password, address, province, district, locality, postal, lat, lng) VALUES ('$name', '$lastname', '$phone', '$password', '$address', '$province', '$district', '$locality', '$postal', '$lat', '$lng')";
            mysqli_query($conn, $sql);

            $_SESSION['phone'] = $phone;
            $_SESSION['name'] = $name;
            $_SESSION['success'] = "ล็อคอินสำเร็จ";
            header('location: index.php');
        } else {
            array_push($errors, "เบอร์นี้ถูกใช้ไปเเล้ว");
            $_SESSION['error'] = "เบอร์นี้ถูกใช้ไปเเล้ว";
            header("location: memberSingUp.php");
        }
    }
?>