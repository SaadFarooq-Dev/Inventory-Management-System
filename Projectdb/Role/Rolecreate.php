<?php
$title = 'Add Role | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/RoleModel.php');


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Add New Role</h1>
            <a href="../Role/Role.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/RoleController.php" method="post" name="RoleForm">

            <div class="mb-3">
                <label for="rolename" class="form-label">Role Name</label>
                <input type="text" class="form-control border border-primary " name="rolename" id="rolename" placeholder="Role Name">
                <p class="" id="rolenameError"></p>

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control border border-primary" name="description" id="description" placeholder="Description">
                <p class="" id="descriptionError"></p>
            </div>


            <button type="submit" name="add" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Add</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>