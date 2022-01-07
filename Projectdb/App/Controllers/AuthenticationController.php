<?php

include_once('../Model/Authentication.php');

if (isset($_POST['login'])) {

    $valid = Auth::login($_POST['username'], $_POST['password']);
    if ($valid == true) {
        header('Location: ' . '../../Dashboard/index.php');
        exit;
    }

    if ($valid == false) {
        header('Location: ' . '../../login.php?status=InvalidUsernameOrPassword');
        exit;
    }
} else if (isset($_POST['logout'])) {
    Auth::logout();
    header('Location: ' . '../../login.php');
    exit;
} else if (isset($_POST['register'])) {

    Auth::insert([
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ]);

    header("Location:../../login.php");
    exit;
}
