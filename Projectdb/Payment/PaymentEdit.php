<?php
$title = 'Payment | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/PaymentModel.php');
include('../App/Model/OrderDetailModel.php');



if (isset($_GET['id'])) {
    $Payment = Payment::find($_GET['id']);
}


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Edit Payment</h1>
            <a href="../Payment/Payment.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/PaymentController.php" method="post" name="PaymentForm">
            <input type="hidden" name="id" value="<?php echo $Payment['id']; ?>">
            <div class="mb-3">
                <label for="billnumber" class="form-label">Bill Number</label>
                <select name="billnumber" id="billnumber" class="form-select border border-primary">
                    <?php
                    $OrderDetails = OrderDetail::all();
                    $paymentsfind = Payment::all();
                    echo '<option value="' . $Payment['billnumber'] . '">' . $Payment['billnumber'] . '</option>';

                    foreach ($OrderDetails as $Order) {
                        $flag = false;
                        foreach ($paymentsfind as $paymentloop) {
                            if ($paymentloop['billnumber'] == $Order['billnumber']) {
                                $flag = true;
                                break;
                            }
                        }
                        if ($flag == false) {
                            echo '<option value="' . $Order['billnumber'] . '">' . $Order['billnumber'] . '</option>';
                        }
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


            <button type="submit" name="edit" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Edit</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>