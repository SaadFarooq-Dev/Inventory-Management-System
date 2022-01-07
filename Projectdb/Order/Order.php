<?php
$title = 'Order | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');
include('../App/Model/OrderModel.php');


?>

<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Orders</h3>
            <a href="Ordercreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Order</a>

            <a href="../Dashboard/index.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Order Database</div>
                <div class="card-body">
                    <p class="card-title"></p>
                    <table class="table table-hover" id="dataTables-example" width="100%">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Order Date</th>
                                <th>Order Details</th>
                                <th>Customer Name</th>

                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $orderss = Orders::all();
                            foreach ($orderss as $order) {
                                $customer = Orders::customer($order['customerid']);

                                echo ' <tr>
                                <td>' . $order['id'] . '</td>
                                <td>' . $order['dateoforder'] . '</td>
                                <td>' . $order['orderdetails'] . '</td>
                                <td>' . $customer['name'] . '</td>
                                <td class="text-end">
                                <a href="OrderEdit.php?id=' . $order['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/OrderController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $order['id'] . '">
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