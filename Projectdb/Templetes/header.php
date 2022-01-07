<?php
session_start();
include_once('../App/Model/Authentication.php');


if (!Auth::valid()) {
    header("Location: ../login.php");
    exit;
}

?>


<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/master.css" rel="stylesheet">
    <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <link href="../assets/vendor/datatables/datatables.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">