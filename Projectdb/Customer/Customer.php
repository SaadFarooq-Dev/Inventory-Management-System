<?php
$title = 'Customer | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/CustomerModel.php');

include('../App/Model/EmployeeModel.php');

?>

<!-- end of navbar navigation -->
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Customers</h3>
            <a href="Customercreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Customer</a>

            <a href="../Dashboard/index.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Customer Database</div>
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
                                <th>Employee Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $customers = Customer::all();
                            foreach ($customers as $customer) {

                                $employee = Customer::employee($customer['employeeid']);
                                echo ' <tr>
                                <td>' . $customer['id'] . '</td>
                                <td>' . $customer['name'] . '</td>
                                <td>' . $customer['email'] . '</td>
                                <td>' . $customer['phone'] . '</td>
                                <td>' . $customer['address'] . '</td>
                                <td>' . $employee['name'] . '</td>
                                
                                <td class="text-end">
                                <a href="CutomerEdit.php?id=' . $customer['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/CustomerController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $customer['id'] . '">
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