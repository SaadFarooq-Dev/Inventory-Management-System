<?php
$title = 'Customer | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/OrderModel.php');
include('../App/Model/CustomerModel.php');


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Add New Order</h1>
            <a href="../Order/Order.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/OrderController.php" method="post" name="OrderForm">

            <div class="mb-3">
                <label for="date" class="form-label">Order Date</label>
                <input type="date" class="form-control border border-primary " name="dateoforder" id="dateoforder" placeholder="Order Date">
                <p class="" id="dateoforderError"></p>

            </div>
            <div class="mb-3">
                <label for="orderdetails" class="form-label">Order Details</label>
                <input type="text" class="form-control border border-primary" name="orderdetails" id="orderdetails" placeholder="Order Details">
                <p class="" id="orderdetailsError"></p>
            </div>

            <div class="mb-3">
                <label for="customer" class="form-label">Customer</label>
                <select name="customerid" id="customerid" class="form-select border border-primary">
                    <?php
                    $customers = Customer::all();
                    foreach ($customers as $customer) {
                        echo '<option value="' . $customer['id'] . '">' . $customer['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>


            <button type="submit" name="add" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Add</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>