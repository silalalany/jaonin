<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($phone)) {
            array_push($errors, "phone da");
        }

        if (empty($password)) {
            array_push($errors, "passwrwd da");
        }

        if (count($errors) == 0) {
            //$password = md5($password);
            $query = "SELECT * FROM user WHERE phone = '$phone' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['phone'] = $phone;
                $_SESSION['success'] = "ล็อคอินสำเร็จ";
                header("location: index.php");
            } else {
                array_push($errors, "*เบอร์โทรศัพท์ หรือรหัสผ่านไม่ถูกต้อง");
                $_SESSION['error'] = "*เข้าสู่ระบบไม่สำเร็จ เพราะ เบอร์โทรศัพท์หรือรหัสผ่านไม่ถูกต้อง";
                header("location: member.php");
            }
        }
    } 

    
    
    







?>