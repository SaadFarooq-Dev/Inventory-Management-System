<?php
$title = 'Edit OrderDetail | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/OrderDetailModel.php');

include('../App/Model/OrderModel.php');
include('../App/Model/ProductModel.php');

if (isset($_GET['id'])) {
    $OrderDetail = OrderDetail::find($_GET['id']);
}


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Edit OrderDetail</h1>
            <a href="../OrderDetail/OrderDetail.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/OrderDetailController.php" method="post" name="OrderDetailForm">
            <input type="hidden" name="id" value="<?php echo $OrderDetail['id']; ?>">

            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control border border-primary " name="size" id="size" placeholder="Size">
                <p class="" id="sizeError"></p>

            </div>
            <div class="mb-3">
                <label for="billnumber" class="form-label">Bill Number</label>
                <input type="text" class="form-control border border-primary" name="billnumber" id="billnumber" placeholder="Bill Number">
                <p class="" id="billnumberError"></p>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control border border-primary " name="date" id="date" placeholder="Date">
                <p class="" id="dateError"></p>

            </div>

            <div class="mb-3">
                <label for="unitprice" class="form-label">Unit Price</label>
                <input type="number" class="form-control border border-primary" name="unitprice" id="unitprice" placeholder="Unit Price">
                <p class="" id="unitpriceError"></p>
            </div>


            <div class="mb-3">
                <label for="quantity" class="form-label">quantity</label>
                <input type="number" class="form-control border border-primary" name="quantity" id="quantity" placeholder="Quantity">
                <p class="" id="quantityError"></p>
            </div>

            <div class="mb-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" class="form-control border border-primary" name="discount" id="discount" placeholder="Discount">
                <p class="" id="discountError"></p>
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order ID</label>
                <select name="orderid" id="orderid" class="form-select border border-primary">
                    <?php
                    $Orders = Orders::all();
                    $OrderDetailall = OrderDetail::all();
                    echo '<option value="' . $OrderDetail['orderid'] . '">' . $OrderDetail['orderid'] . '</option>';

                    foreach ($Orders as $Order) {
                        $flag = false;
                        foreach ($OrderDetailall as $OrderDetailloop) {
                            if ($OrderDetailloop['orderid'] == $Order['id']) {
                                $flag = true;
                                break;
                            }
                        }
                        if ($flag == false) {
                            echo '<option value="' . $Order['id'] . '">' . $Order['id'] . '</option>';
                        }
                    }

                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="Product" class="form-label">Product Name</label>
                <select name="productid" id="productid" class="form-select border border-primary">
                    <?php
                    $Products = Product::all();
                    foreach ($Products as $Product) {
                        echo '<option value="' . $Product['id'] . '">' . $Product['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <button type="submit" name="edit" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Edit</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>