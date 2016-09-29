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
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <!-- CSS Reset -->
    <link rel="stylesheet" href="http://milligram.github.io/bower_components/normalize.css/normalize.css">
    <!-- Milligram CSS minified -->
    <link rel="stylesheet" href="http://milligram.github.io/bower_components/milligram/dist/milligram.min.css">
</head>
<body>
<main class="row">
    <aside class="column">&nbsp;</aside>
    <section class="column">
        <h1>Register</h1>
        <?php
            if(isset($error) && $error != null){
                echo $error;
            }
            if(isset($info) && $error != null){
                echo $info;
            }
        ?>
        <form method="post" action="/register" class="clearfix">
            <fieldset>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter your Username">

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your Email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter your Password">

                <label for="passwordRepeat">Password Repeat</label>
                <input type="password" name="passwordRepeat" placeholder="Repeat your Password">

                <button type="submit" class="button float-right">Register</button>
                If you already have a account, please <a href="/login">login</a>.
            </fieldset>
        </form>
    </section>
    <aside class="column">&nbsp;</aside>
</main>
</body>
</html>
