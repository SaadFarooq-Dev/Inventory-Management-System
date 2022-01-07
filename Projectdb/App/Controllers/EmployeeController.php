<?php

include('../Model/EmployeeModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    Employee::insert([
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'roleid' => $_POST['roleid'],
        'type' => $_POST['type'],
        'status' => $_POST['status']

    ]);

    header("Location:../../Employee/Employee.php");
    exit;
} else if (isset($_POST['edit'])) {

    Employee::update($_POST['id'], [
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'roleid' => $_POST['roleid'],
        'type' => $_POST['type'],
        'status' => $_POST['status']
    ]);

    header("Location:../../Employee/Employee.php");
    exit;
} else if (isset($_POST['delete'])) {

    Employee::delete($_POST['id']);

    header("Location:../../Employee/Employee.php");
    exit;
}
