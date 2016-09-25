<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Fabio Soares
 * Date: 25/09/2016
 * Time: 11:15
 */
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta name="viewport" content="width=device-width">
    </head>

    <body>
        <h1>Register</h1>
        <?php
            if($error != null){
                echo $error;
            }
        ?>
        <form method="post" action="/register">
            <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="Enter Your Username"><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="Enter Your Email"><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="Enter Your Password"><br>

            <label for="passwordRepeat">Password Repeat</label><br>
            <input type="password" name="passwordRepeat" placeholder="Repeat Your Password"><br>

            <button type="submit">Register</button>
        </form>
        If you already have a account, please <a href="/login">login</a>.
    </body>
</html>
