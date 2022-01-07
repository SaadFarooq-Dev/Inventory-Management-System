<?php
$title = 'Order Details | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/OrderDetailModel.php');
include('../App/Model/ProductModel.php');

?>



<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Order Details</h3>
            <a href="OrderDetailcreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Detail</a>

            <a href="../Dashboard/index.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Order Detail Database</div>
                <div class="card-body">
                    <p class="card-title"></p>
                    <table class="table table-hover" id="dataTables-example" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>size</th>
                                <th>Bill Number</th>
                                <th>Date</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Discount</th>
                                <th>Total Amount</th>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $orderdetails = OrderDetail::all();
                            foreach ($orderdetails as $OrderDetail) {

                                $product = OrderDetail::productfind($OrderDetail['productid']);

                                echo ' <tr>
                                <td>' . $OrderDetail['id'] . '</td>
                                <td>' . $OrderDetail['size'] . '</td>
                                <td>' . $OrderDetail['billnumber'] . '</td>
                                <td>' . $OrderDetail['date'] . '</td>
                                <td>Rs.' . $OrderDetail['unitprice'] . '</td>
                                <td>' . $OrderDetail['quantity'] . '</td>
                                <td>' . $OrderDetail['discount'] . '</td>
                                <td>' . $OrderDetail['totalamount'] . '</td>
                                <td>' . $OrderDetail['orderid'] . '</td>
                                <td>' . $product['name'] . '</td>
                        
                                <td class="text-end">
                                <a href="OrderDetailEdit.php?id=' . $OrderDetail['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/OrderDetailController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $OrderDetail['id'] . '">
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