<?php
$title = 'Suppliers | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/SupplierModel.php');


?>
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Supplier</h3>
            <a href="Suppliercreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Suplier</a>

            <a href="../Dashboard/index.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Supplier Database</div>
                <div class="card-body">
                    <p class="card-title"></p>
                    <table class="table table-hover" id="dataTables-example" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Other Details</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $suppliers = Supplier::all();
                            foreach ($suppliers as $supplier) {
                                echo ' <tr>
                                <td>' . $supplier['id'] . '</td>
                                <td>' . $supplier['name'] . '</td>
                                <td>' . $supplier['email'] . '</td>
                                <td>' . $supplier['phone'] . '</td>
                                <td>' . $supplier['address'] . '</td>
                                <td>' . $supplier['otherdetails'] . '</td>
                                <td class="text-end">
                                <a href="SupplierEdit.php?id=' . $supplier['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/SupplierController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $supplier['id'] . '">
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
</div>


<?php

include('../Templetes/footer.php');

?>