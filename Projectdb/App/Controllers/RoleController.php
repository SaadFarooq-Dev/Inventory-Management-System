<?php

include('../Model/RoleModel.php');

if (isset($_POST['add'])) {
    //validate request data

    //insert into company

    Role::insert([
        'rolename' => $_POST['rolename'],
        'description' => $_POST['description']
    ]);

    header("Location:../../Role/Role.php");
    exit;
} else if (isset($_POST['edit'])) {

    Role::update($_POST['id'], [
        'rolename' => $_POST['rolename'],
        'description' => $_POST['description']
    ]);

    header("Location:../../Role/Role.php");
    exit;
} else if (isset($_POST['delete'])) {

    Role::delete($_POST['id']);

    header("Location:../../Role/Role.php");
    exit;
}
