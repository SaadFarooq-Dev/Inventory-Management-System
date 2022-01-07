<?php
$title = 'Payment | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');


include('../App/Model/PaymentModel.php');

?>



<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Payment</h3>
            <a href="Paymentcreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Payment</a>

            <a href="../Dashboard/index.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Payment Database</div>
                <div class="card-body">
                    <p class="card-title"></p>
                    <table class="table table-hover" id="dataTables-example" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bill Number</th>
                                <th>Payment Type</th>
                                <th>Other Details</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Payments = Payment::all();
                            foreach ($Payments as $Payment) {
                                echo ' <tr>
                                <td>' . $Payment['id'] . '</td>
                                <td>' . $Payment['billnumber'] . '</td>
                                <td>' . $Payment['paymenttype'] . '</td>
                                <td>' . $Payment['otherdetails'] . '</td>
                                <td class="text-end">
                                <a href="PaymentEdit.php?id=' . $Payment['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/PaymentController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $Payment['id'] . '">
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