<?php
    $a_email = "ageraone@gmail.com";
    $a_password = password_hash("123", PASSWORD_DEFAULT);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == $a_email) {
            if (password_verify($password, $a_password)) {
                echo "Login Successed";
                header('Location: ../Home/index.html');
                exit;
            } else {
                echo ""
            }
        } else {
            echo "Email tidak tersedia";
            exit;
        }
        echo $email." - ".$password
    }
?>