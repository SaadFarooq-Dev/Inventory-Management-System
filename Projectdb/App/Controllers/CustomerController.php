<?php

include('../Model/CustomerModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    Customer::insert([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'employeeid' => $_POST['employeeid']

    ]);

    header("Location:../../Customer/Customer.php");
    exit;
} else if (isset($_POST['edit'])) {

    Customer::update($_POST['id'], [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'employeeid' => $_POST['employeeid']

    ]);

    header("Location:../../Customer/Customer.php");
    exit;
} else if (isset($_POST['delete'])) {

    Customer::delete($_POST['id']);

    header("Location:../../Customer/Customer.php");
    exit;
}
