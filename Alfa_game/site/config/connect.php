<?php

    $servername = "localhost"; // соединение с бд
    $database = "alfa_game";
    $username = "root";
    $password = "";
    
    $link = mysqli_connect($servername, $username, $password, $database);
    
    if (!$link) {
        die('Error');
    }