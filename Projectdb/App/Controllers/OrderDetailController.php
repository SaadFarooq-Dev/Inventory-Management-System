<?php

include('../Model/OrderDetailModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    $totalamount = ($_POST['unitprice'] * $_POST['quantity']) - ($_POST['discount']);

    OrderDetail::insert([
        'size' => $_POST['size'],
        'billnumber' => $_POST['billnumber'],
        'date' => $_POST['date'],
        'unitprice' => $_POST['unitprice'],
        'quantity' => $_POST['quantity'],
        'discount' => $_POST['discount'],
        'totalamount' => $totalamount,
        'orderid' => $_POST['orderid'],
        'productid' => $_POST['productid']

    ]);

    header("Location:../../OrderDetail/OrderDetail.php");
    exit;
} else if (isset($_POST['edit'])) {


    $totalamount = ($_POST['unitprice'] * $_POST['quantity']) - ($_POST['discount']);


    OrderDetail::update($_POST['id'], [

        'size' => $_POST['size'],
        'billnumber' => $_POST['billnumber'],
        'date' => $_POST['date'],
        'unitprice' => $_POST['unitprice'],
        'quantity' => $_POST['quantity'],
        'discount' => $_POST['discount'],
        'totalamount' => $totalamount,
        'orderid' => $_POST['orderid'],
        'productid' => $_POST['productid']
    ]);

    header("Location:../../OrderDetail/OrderDetail.php");
    exit;
} else if (isset($_POST['delete'])) {

    OrderDetail::delete($_POST['id']);

    header("Location:../../OrderDetail/OrderDetail.php");
    exit;
}
