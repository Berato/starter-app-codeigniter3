<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Fabio Soares
 * Date: 25/09/2016
 * Time: 23:28
 */?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logged in</title>
        <meta name="viewport" content="width=device-width">
    </head>

    <body>
        Well come <?php if(isset($username)){echo $username;} ?>. You are logged in. Now you can <a href="/logout">logout</a>.
    </body>
</html>