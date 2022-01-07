<?php
$title = 'Employees | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/EmployeeModel.php');
include('../App/Model/RoleModel.php');

?>


<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Employees
            </h3>
            <a href="Employeecreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Employee</a>

            <a href="../Dashboard/index.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $Employees = Employee::all();
                        foreach ($Employees as $Employee) {

                            $role = Employee::roles($Employee['roleid']);


                            echo ' <tr>
                                <td>' . $Employee['id'] . '</td>
                                <td>' . $Employee['name'] . '</td>
                                <td>' . $Employee['address'] . '</td>
                                <td>' . $Employee['email'] . '</td>
                                <td>' . $Employee['phone'] . '</td>
                                <td>' . $role['rolename'] . '</td>
                                <td>' . $Employee['type'] . '</td>
                                <td>' . $Employee['status'] . '</td>
                                <td class="text-end">
                                <a href="EmployeeEdit.php?id=' . $Employee['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/EmployeeController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $Employee['id'] . '">
                                <input type="submit" value="Delete" name="delete" class="btn btn-outline-danger btn-rounded" ><i class="fas fa-trash"></i> </input>
                                </form>

                            </td>
                                </tr>';
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php

include('../Templetes/footer.php');

?>