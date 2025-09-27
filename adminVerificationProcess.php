<?php

include "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["e"])){

    $email = $_POST["e"];

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."'");
    $admin_num = $admin_rs->num_rows;

    if($admin_num > 0){

        $code = uniqid();

        Database::iud("UPDATE `admin` SET `vcode`='".$code."' WHERE `email`='".$email."'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'disandurodrigo@gmail.com';
        $mail->Password = 'urvzyrqowfdfvnmg';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('disandurodrigo@gmail.com', 'Admin Verification');
        $mail->addReplyTo('disandurodrigo@gmail.com', 'Admin Verification');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'DRodX Store Admin Login Verification Code';
        $bodyContent = '<h1 style="color:blue;">Your Verification Code is ' . $code . '</h1>';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'Verification code sending failed.';
        } else {
            echo 'Success';
        }

    }else{
        echo ("You are not a valid user.");
    }

}else{
    echo ("Email field should not be empty.");
}

?>