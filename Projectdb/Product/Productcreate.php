<?php
$title = 'Add Product | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/ProductModel.php');
include('../App/Model/SupplierModel.php');

include('../App/Model/CategoryModel.php');

?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Add New Product</h1>
            <a href="../Product/Product.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/ProductController.php" method="post" name="ProductForm">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control border border-primary " name="name" id="name" placeholder="Name">
                <p class="" id="nameError"></p>

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control border border-primary" name="description" id="description" placeholder="Description">
                <p class="" id="descriptionError"></p>
            </div>

            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="number" class="form-control border border-primary" name="unit" id="unit" placeholder="Unit">
                <p class="" id="unitError"></p>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control border border-primary" name="price" id="price" placeholder="Price">
                <p class="" id="priceError"></p>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">quantity</label>
                <input type="number" class="form-control border border-primary" name="quantity" id="quantity" placeholder="Quantity">
                <p class="" id="quantityError"></p>
            </div>


            <div class="mb-3">
                <label for="status" class="form-label">Status</label>

                <select name="status" id="status" class="form-select border border-primary">
                    <option value="For Sale">For Sale</option>;
                    <option value="Not For Sale">Not For Sale</option>;

                </select>

                <p class="" id="statusError"></p>
            </div>


            <div class="mb-3">
                <label for="otherdetails" class="form-label">Other Details</label>
                <input type="text" class="form-control border border-primary" name="otherdetails" id="otherdetails" placeholder="Other Details">
                <p class="" id="otherdetailsError"></p>
            </div>

            <div class="mb-3">
                <label for="supplier" class="form-label">Suppliers</label>
                <select name="supplierid" id="supplierid" class="form-select border border-primary">
                    <?php
                    $suppliers = Supplier::all();
                    foreach ($suppliers as $supplier) {
                        echo '<option value="' . $supplier['id'] . '">' . $supplier['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categorys</label>
                <select name="categoryid" id="categoryid" class="form-select border border-primary">
                    <?php
                    $categorys = Category::all();
                    foreach ($categorys as $category) {
                        echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
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