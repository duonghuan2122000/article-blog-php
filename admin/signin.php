<?php 
// kết nối db và thông tin chung
require 'core/init.php';

// nếu có tồn tại phương thức post
if(isset($_POST['user_signin']) && isset($_POST['pass_signin'])){
    // xử lý các giá trị
    $user_signin = trim(htmlspecialchars(addslashes($_POST['user_signin'])));
    $pass_signin = trim(htmlspecialchars(addslashes($_POST['pass_signin'])));

    // các biến xử lý thông báo
    $show_alert = '<script>$("#formSignin .alert").removeClass("hidden");</script>';
    $hide_alert = '<script>$("#formSignin .alert").addClass("hidden");</script>';
    $success = '<script>$("#formSignin .alert").attr("class", "alert alert-success");</script>';

    // nếu giá trị rỗng
    if(empty($user_signin) || empty($pass_signin)){
        echo $show_alert.'Vui lòng điền đầy đủ thông tin.';
    } else {
        $sql_check_user_exist = "SELECT username, password FROM accounts WHERE username = '$user_signin'";

        if($user_signed = $db->fetch_assoc($sql_check_user_exist, 1)){
            if(md5($pass_signin) == $user_signed['password']){
                $session->set('user', $user_signed);
                $db->close();
                echo $show_alert.$success.'Đăng nhập thành công.';
                new Redirect($_DOMAIN);
            } else {
                echo $show_alert.'Mật khẩu không chính xác';
            }
        } else {
            echo $show_alert.'Tên đăng nhập không chính xác';
        }
    }
} else {
    new Redirect($_DOMAIN);
}