<?php

include('../Model/PaymentModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    Payment::insert([
        'billnumber' => $_POST['billnumber'],
        'paymenttype' => $_POST['paymenttype'],
        'otherdetails' => $_POST['otherdetails']
    ]);

    header("Location:../../Payment/Payment.php");
    exit;
} else if (isset($_POST['edit'])) {

    Payment::update($_POST['id'], [
        'billnumber' => $_POST['billnumber'],
        'paymenttype' => $_POST['paymenttype'],
        'otherdetails' => $_POST['otherdetails']
    ]);

    header("Location:../../Payment/Payment.php");
    exit;
} else if (isset($_POST['delete'])) {

    Payment::delete($_POST['id']);

    header("Location:../../Payment/Payment.php");
    exit;
}
