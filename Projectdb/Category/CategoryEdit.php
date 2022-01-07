<?php
$title = 'Category | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/CategoryModel.php');



if (isset($_GET['id'])) {
    $Category = Category::find($_GET['id']);
}


?>


<div class="content ">
    <div class="container card">

        <div class="py-2 mb-4 ">
            <h1 class="display-5 fw-bold">Edit Category</h1>
            <a href="../Category/Category.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>

        </div>

        </ul>

        <form action="../App/Controllers/CategoryController.php" method="post" name="CategoryForm">
            <input type="hidden" name="id" value="<?php echo $Category['id']; ?>">


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

            <button type="submit" name="edit" class="btn btn-outline-primary" style="margin-top:2rem; margin-bottom:2rem; padding:0.5rem 1rem 0.5rem 1rem">Edit</button>
        </form>
    </div>
</div>

<?php

include('../Templetes/footer.php');

?>