<?php
$title = 'Roles | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/RoleModel.php');


?>

<!-- end of navbar navigation -->
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Role Roles
                <a href="Rolecreate.php" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-plus-circle"></i> Add</a>
                <a href="../Dashboard/index.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Role ID</th>
                            <th>Role Name</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $Roles = Role::all();
                        foreach ($Roles as $Role) {
                            echo ' <tr>
                                <td>' . $Role['id'] . '</td>
                                <td>' . $Role['rolename'] . '</td>
                                <td>' . $Role['description'] . '</td>
                                <td class="text-end">
                                <a href="RoleEdit.php?id=' . $Role['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/RoleController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $Role['id'] . '">
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