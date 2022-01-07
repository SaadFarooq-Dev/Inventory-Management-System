<?php
$title = 'Payment | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');
include('../App/Model/ProductModel.php');

include('../App/Model/SupplierModel.php');

include('../App/Model/CategoryModel.php');



?>

<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Products</h3>
            <a href="Productcreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Product</a>

            <a href="/index.html" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Products Database</div>
                <div class="card-body">
                    <p class="card-title"></p>
                    <table class="table table-hover" id="dataTables-example" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Other Details</th>
                                <th>Supplier</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $products = Product::all();
                            foreach ($products as $product) {


                                $supplier = Product::supplierfind($product['supplierid']);

                                $category = Product::categoryfind($product['categoryid']);

                                echo ' <tr>
                                <td>' . $product['id'] . '</td>
                                <td>' . $product['name'] . '</td>
                                <td>' . $product['description'] . '</td>
                                <td>' . $product['unit'] . '</td>
                                <td>Rs. ' . $product['price'] . '</td>
                                <td>' . $product['quantity'] . '</td>
                                <td>' . $product['status'] . '</td>
                                <td>' . $product['otherdetails'] . '</td>
                                <td>' . $supplier['name'] . '</td>
                                <td>' . $category['name'] . '</td>
                                <td class="text-end">
                                <a href="ProductEdit.php?id=' . $product['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/ProductController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $product['id'] . '">
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