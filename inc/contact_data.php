<?php
function postData($firstName, $lastName, $email, $subject, $message)
    {
        include("dbConn.php");

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
            echo $sql->queryString;
            return true;
        }
        catch (PDOException $e)
        {
            echo 'Unable to send data ' . $e->getMessage();
            exit;
        }
    }