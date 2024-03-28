<?php

use PHPMailer\PHPMailer\PHPMailer;
function postData($firstName, $lastName, $email, $subject, $message)
{
    include("dbConn.php");
    require 'vendor/autoload.php';

   

    try {
        $sql = $conn->prepare('
            INSERT INTO contact (first_name, last_name, email, subject, message)
            VALUES (:first_name, :last_name, :email, :subject, :message);
        ');

        $sql->bindValue(":first_name", $firstName, PDO::PARAM_STR);
        $sql->bindValue(":last_name", $lastName, PDO::PARAM_STR);
        $sql->bindValue(":email", $email, PDO::PARAM_STR);
        $sql->bindValue(":subject", $subject, PDO::PARAM_STR);
        $sql->bindValue(":message", $message, PDO::PARAM_STR);

        $sql->execute();

        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'c9dcb0519ea437';
        $phpmailer->Password = 'b6c1d1fe746871';
        $phpmailer->setFrom($email, $firstName . ' ' . $lastName);
        $phpmailer->addAddress('deanyosla@gmail.com');
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $message;
        $phpmailer->send();

        return true;
    } catch (PDOException $e) {
        echo 'Unable to send data ' . $e->getMessage();
        exit;
    }
}