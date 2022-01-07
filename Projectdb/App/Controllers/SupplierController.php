<?php

include('../Model/SupplierModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    Supplier::insert([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'otherdetails' => $_POST['otherdetails']

    ]);

    header("Location:../../Supplier/Supplier.php");
    exit;
} else if (isset($_POST['edit'])) {

    Supplier::update($_POST['id'], [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'otherdetails' => $_POST['otherdetails']
    ]);

    header("Location:../../Supplier/Supplier.php");
    exit;
} else if (isset($_POST['delete'])) {

    Supplier::delete($_POST['id']);

    header("Location:../../Supplier/Supplier.php");
    exit;
}
