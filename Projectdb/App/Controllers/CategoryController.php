<?php

include('../Model/CategoryModel.php');

if (isset($_POST['add'])) {
    //validate request data




    //insert into company

    Category::insert([
        'name' => $_POST['name'],
        'description' => $_POST['description']
    ]);

    header("Location:../../Category/Category.php");
    exit;
} else if (isset($_POST['edit'])) {

    Category::update($_POST['id'], [
        'name' => $_POST['name'],
        'description' => $_POST['description']
    ]);

    header("Location:../../Category/Category.php");
    exit;
} else if (isset($_POST['delete'])) {

    Category::delete($_POST['id']);

    header("Location:../../Category/Category.php");
    exit;
}
