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
                <h1>Login</h1>
                <?php
                if(isset($error) && $error != null){
                    echo $error;
                }
                ?>
                <form method="post" action="<?=base_url('login')?>" class="clearfix">
                    <fieldset>
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Enter Your Username">

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">

                        <button type="submit" class="button float-right">Sign in</button>
                        If your doesn't have a accout, please <a href="/register">register</a>.
                    </fieldset>
                </form>
            </section>
            <aside class="column">&nbsp;</aside>
        </main>
    </body>
</html>
