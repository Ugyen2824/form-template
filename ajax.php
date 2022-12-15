<?php
    include 'db.php';
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];

        $Sql = 'INSERT into users (email,password,name) VALUES("'.$email.'","'.$password.'","'.$name.'")';
        mysqli_query($conn,$Sql);

        echo 'success';
    }

    elseif (isset($_POST['Login_email']) && isset($_POST['login_password'])) {
        $Login_email = $_POST['Login_email'];
        $login_password = $_POST['login_password'];

        $Sql = "Select * from users where email ='$Login_email' && password = '$login_password'";
        $res = mysqli_query($conn,$Sql);
        
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['id'] = $row['id'];
            $arr = array("status" => 'success', 'message' => 'Logged Successfully');
        }else {
            $arr = array("status" => 'error', 'message' => 'Check email or password');
        }
        echo  json_encode($arr);
    
    }
?>