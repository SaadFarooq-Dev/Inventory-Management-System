<?php
$title = 'Customer | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/PaymentModel.php');
include('../App/Model/OrderDetailModel.php');


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Add New Payment</h1>
            <a href="../Payment/Payment.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/PaymentController.php" method="post" name="PaymentForm">



            <div class="mb-3">
                <label for="billnumber" class="form-label">Bill Number</label>
                <select name="billnumber" id="billnumber" class="form-select border border-primary">
                    <?php
                    $OrderDetails = OrderDetail::all();
                    $payments = Payment::all();

                    $count = 0;
                    foreach ($OrderDetails as $Order) {
                        $flag = false;
                        foreach ($payments as $payment) {
                            if ($payment['billnumber'] == $Order['billnumber']) {
                                $flag = true;
                                break;
                            }
                        }
                        if ($flag == false) {
                            echo '<option value="' . $Order['billnumber'] . '">' . $Order['billnumber'] . '</option>';
                            $count = $count + 1;
                        }
                    }
                    if ($count == 0) {
                        echo '<option value="Null">No Billing Available</option>';
                    }

                    ?>
                </select>
                <p class="" id="billnumberError"></p>
            </div>




            <div class="mb-3">
                <label for="paymenttype" class="form-label">Payment Type</label>

                <select name="paymenttype" id="paymenttype" class="form-select border border-primary">
                    <option value="VISA">VISA</option>;
                    <option value="MASTERCARD">MASTERCARD</option>;
                    <option value="BANK TRANSFER">BANK TRANSFER</option>;
                    <option value="CASH">CASH</option>;

                </select>

                <p class="" id="statusError"></p>
            </div>




            <div class="mb-3">
                <label for="otherdetails" class="form-label">Other Details</label>
                <input type="text" class="form-control border border-primary" name="otherdetails" id="otherdetails" placeholder="Other Details">
                <p class="" id="otherdetailsError"></p>
            </div>

            <button type="submit" name="add" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Add</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>