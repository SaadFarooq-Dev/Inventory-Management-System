<?php

include('../Model/ProductModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    Product::insert([
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'unit' => $_POST['unit'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
        'status' => $_POST['status'],
        'otherdetails' => $_POST['otherdetails'],
        'supplierid' => $_POST['supplierid'],
        'categoryid' => $_POST['categoryid']

    ]);

    header("Location:../../Product/Product.php");
    exit;
} else if (isset($_POST['edit'])) {

    Product::update($_POST['id'], [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'unit' => $_POST['unit'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
        'status' => $_POST['status'],
        'otherdetails' => $_POST['otherdetails'],
        'supplierid' => $_POST['supplierid'],
        'categoryid' => $_POST['categoryid']
    ]);

    header("Location:../../Product/Product.php");
    exit;
} else if (isset($_POST['delete'])) {

    Product::delete($_POST['id']);

    header("Location:../../Product/Product.php");
    exit;
}
