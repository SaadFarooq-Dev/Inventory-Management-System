<?php
$title = 'Category | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/CategoryModel.php');


?>

<!-- end of navbar navigation -->
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Category
            </h3>

            <a href="Categorycreate.php" class="btn btn-outline-primary mb-2" type="button">Add New Category</a>
            <a href="/index.html" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $Categorys = Category::all();
                        foreach ($Categorys as $Category) {
                            echo ' <tr>
                                <td>' . $Category['id'] . '</td>
                                <td>' . $Category['name'] . '</td>
                                <td>' . $Category['description'] . '</td>
                                <td class="text-end">
                                <a href="CategoryEdit.php?id=' . $Category['id'] . '" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                <form action="../App/Controllers/CategoryController.php" method="post" style="display:inline">
                                <input type="hidden" name="id" value="' . $Category['id'] . '">
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


<?php

include('../Templetes/footer.php');

?>