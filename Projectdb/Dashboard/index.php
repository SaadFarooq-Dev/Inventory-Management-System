<?php
$title = 'DashBoard | IMS';

include('../Templetes/header.php');

include('../Templetes/sidebar.php');

include('../App/Model/OrderModel.php');
include('../App/Model/OrderDetailModel.php');
include('../App/Model/EmployeeModel.php');

?>

<?php
$order = Orders::count();

$OrderDetail = OrderDetail::amountcount();

$orderpending = OrderDetail::pending();

$totalemployee = Employee::totalemployee();

?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-header">
                <div class="page-pretitle">Overview</div>
                <h2 class="page-title">Dashboard</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                    <i class="teal fas fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail">
                                    <p class="detail-subtitle">Total Orders</p>
                                    <span class="number"><?php echo $order['total'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-calendar"></i> For this Month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                    <i class="olive fas fa-money-bill-alt"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail">
                                    <p class="detail-subtitle">Income</p>
                                    <span class="number">Rs. <?php echo $OrderDetail['total'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-calendar"></i> For this Month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                    <i class="violet fas fa-eye"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail">
                                    <p class="detail-subtitle">Orders Pending</p>
                                    <span class="number"><?php echo $orderpending['total'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-stopwatch"></i> For this Month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                    <i class="orange fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail">
                                    <p class="detail-subtitle">Total Employees</p>
                                    <span class="number"><?php echo $totalemployee['total'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-users"></i> Current
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="head">
                                    <h5 class="mb-0">Earning Overview</h5>
                                    <p class="text-muted">Current year Earning data</p>
                                </div>
                                <div class="canvas-wrapper">
                                    <canvas class="chart" id="earningcount"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="head">
                                    <h5 class="mb-0">Sales Overview</h5>
                                    <p class="text-muted">Current year sales data</p>
                                </div>
                                <div class="canvas-wrapper">
                                    <canvas class="chart" id="sales"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php

include('../Templetes/footer.php');

?>