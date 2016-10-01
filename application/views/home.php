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
        <title><?php if(isset($username)){echo $username;} ?></title>
        <meta name="viewport" content="width=device-width">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <!-- CSS Reset -->
        <link rel="stylesheet" href="http://milligram.github.io/bower_components/normalize.css/normalize.css">
        <!-- Milligram CSS minified -->
        <link rel="stylesheet" href="http://milligram.github.io/bower_components/milligram/dist/milligram.min.css">
        <style>
            *{
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h1>Well come <strong><?php if(isset($username)){echo $username;} ?></strong>.</h1>
        You are logged in. Now you can <a href="/logout">logout</a>.
    </body>
</html>