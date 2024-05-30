<?php
include "../classes/connect.class.php";
session_start();
    if (isset($_POST['mail']) and isset($_POST['pass'])) {
            $mail = htmlspecialchars($_POST['mail']);
            $pass = htmlspecialchars($_POST['pass']);
            $c = new Connection;
            $r = $c->selectData("SELECT * FROM users WHERE mail = '{$mail}' AND pass = '{$pass}'");            
            if ($r->rowCount() >= 1) {
                $row = $r->fetch();
                $_SESSION['mail'] = $row['mail'];
                header('location: ../pages/overview.php');
            }
            else {
                header('location: ../pages/signup.php?error=unfoundaccount');
            }
        }