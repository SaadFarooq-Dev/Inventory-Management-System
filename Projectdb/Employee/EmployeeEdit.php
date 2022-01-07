<?php
$title = 'Employee | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/EmployeeModel.php');
include('../App/Model/RoleModel.php');



if (isset($_GET['id'])) {
    $Employee = Employee::find($_GET['id']);
}


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Edit Employee</h1>
            <a href="../Employee/Employee.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/EmployeeController.php" method="post" name="EmployeeForm">
            <input type="hidden" name="id" value="<?php echo $Employee['id']; ?>">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control border border-primary " name="name" id="name" placeholder="Name">
                <p class="" id="nameError"></p>

            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control border border-primary" name="address" id="address" placeholder="Address">
                <p class="" id="addressError"></p>
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
                <label for="role" class="form-label">Role</label>
                <select name="roleid" id="roleid" class="form-select border border-primary">
                    <?php
                    $Roles = Role::all();
                    foreach ($Roles as $Role) {
                        echo '<option value="' . $Role['id'] . '">' . $Role['rolename'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control border border-primary" name="type" id="type" placeholder="Type">
                <p class="" id="typeError"></p>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>

                <select name="status" id="status" class="form-select border border-primary">
                    <option value="Active">Active</option>;
                    <option value="Disabled">Disabled</option>;

                </select>

                <p class="" id="statusError"></p>
            </div>

            <button type="submit" name="edit" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Edit</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>