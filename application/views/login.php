<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Fabio Soares
 * Date: 25/09/2016
 * Time: 11:13
 */
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width">
    </head>

    <body>
        <h1>Login</h1>
        <?php
            if(isset($error) && $error != null){
                echo $error;
            }
        ?>
        <form method="post" action="/">
            <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="Enter Your Username"><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="Enter Your Password"><br>

            <button type="submit">Sign in</button>
        </form>
        If your doesn't have a accout, please <a href="/register">register</a>.
    </body>
</html>
