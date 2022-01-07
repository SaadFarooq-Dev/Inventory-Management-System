<?php

include('../Model/OrderModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    Orders::insert([
        'dateoforder' => $_POST['dateoforder'],
        'orderdetails' => $_POST['orderdetails'],
        'customerid' => $_POST['customerid']


    ]);

    header("Location:../../Order/Order.php");
    exit;
} else if (isset($_POST['edit'])) {

    Orders::update($_POST['id'], [
        'dateoforder' => $_POST['dateoforder'],
        'orderdetails' => $_POST['orderdetails'],
        'customerid' => $_POST['customerid']

    ]);

    header("Location:../../Order/Order.php");
    exit;
} else if (isset($_POST['delete'])) {

    Orders::delete($_POST['id']);

    header("Location:../../Order/Order.php");
    exit;
}
