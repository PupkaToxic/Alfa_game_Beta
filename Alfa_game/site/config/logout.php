<?php
session_start();
unset($_SESSION['user']); // уничтожение сессии пользователя
header('Location: ../autoris.php');