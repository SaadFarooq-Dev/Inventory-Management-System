<?php
include_once('../App/Model/Authentication.php');
?>


<nav id="sidebar" class="active">
    <div class="sidebar-header">
        <img src="../assets/img/headerlogo.png" alt="Inventory logo" class="app-logo">
    </div>
    <ul class="list-unstyled components text-secondary">
        <li>
            <a href="../Dashboard/index.php"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a href="../Customer/Customer.php"><i class="fas fa-users"></i> Customers</a>
        </li>
        <li>
            <a href="../Supplier/Supplier.php"><i class="fas fa-people-carry"></i> Supplier</a>
        </li>
        <li>
            <a href="../Product/Product.php"><i class="fas fa-box-open"></i> Products</a>
        </li>
        <li>
            <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-truck-moving"></i> Orders</a>
            <ul class="collapse list-unstyled" id="uielementsmenu">
                <li>
                    <a href="../Order/Order.php"><i class="fas fa-truck-moving"></i> Order</a>
                </li>
                <li>
                    <a href="../OrderDetail/OrderDetail.php"><i class="fas fa-newspaper"></i> Order Details</a>
                </li>
                <li>
                    <a href="../Category/Category.php"><i class="fas fa-truck-loading"></i> Category</a>
                </li>
                <li>
                    <a href="../Payment/Payment.php"><i class="fas fa-credit-card"></i> Payment</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
            <ul class="collapse list-unstyled" id="authmenu">
                <a href="../signup.php"><i class="fas fa-user-plus"></i> Signup</a>
        </li>
    </ul>
    </li>
    <li>
        <a href="../Employee/Employee.php"><i class="fas fa-user-friends"></i>Employees</a>
    </li>
    </ul>
</nav>
<div id="body" class="active">

    <!-- navbar navigation component -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <button type="button" id="sidebarCollapse" class="btn btn-light"> Menu
            <i class="fas fa-bars"></i><span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <div class="nav-dropdown">
                        <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> <span><?php echo Auth::name(); ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                            <ul class="nav-list">
                                <li><a href="../Role/role.php" class="dropdown-item"><i class="fas fa-address-card"></i>
                                        Roles</a></li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <form action="../App/Controllers/AuthenticationController.php" method="POST">
                                        <input style="color:gray; position: relative; left: 15px;" type="submit" name="logout" value="Logout" class="dropdown-item"><i class="fas fa-sign-out-alt" style="position: relative; left: 10px; bottom: 22px; color: gray;"></i></a>
                                    </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navbar navigation -->