<?php
$title = 'Customer | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/CustomerModel.php');
include('../App/Model/EmployeeModel.php');


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Add New Customer</h1>
            <a href="../Customer/Customer.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/CustomerController.php" method="post" name="CustomerForm">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control border border-primary " name="name" id="name" placeholder="Name">
                <p class="" id="nameError"></p>

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control border border-primary" name="email" id="email" placeholder="Email">
                <p class="" id="emailError"></p>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control border border-primary" name="phone" id="phone" placeholder="Phone No">
                <p class="" id="phoneError"></p>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control border border-primary" name="address" id="address" placeholder="Address">
                <p class="" id="addressError"></p>
            </div>

            <div class="mb-3">
                <label for="employee" class="form-label">Employee</label>
                <select name="employeeid" id="employeeid" class="form-select border border-primary">
                    <?php
                    $employees = Employee::all();
                    foreach ($employees as $employee) {
                        echo '<option value="' . $employee['id'] . '">' . $employee['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>


            <button type="submit" name="add" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Add</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>