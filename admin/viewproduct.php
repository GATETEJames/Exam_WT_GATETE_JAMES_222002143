<?php
include('../db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Your CSS styles */
    </style>
</head>

<body>

    <div class="row">
        <div class="col-lg-12">
            <div class="top">
                <i class="fa fa-dashboard fa-fw">
                </i> Dashboard
            </div>
            <div class="col-lg-12">
                <a href="logout.php" class="btn btn-danger pull-right"><i class="fa fa-sign-out"></i> Logout</a>
                <a href="view-orders.php" class="btn btn-info pull-right"><i class="fa fa-list"></i> View Orders</a>
                <a href="insert-product.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Products
                    </h3>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>ID</th>
                                    <th>Product Title</th>
                                    <th>Product Image 1</th>
                                    <th>Product Image 2</th>
                                    <th>Price</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Fetch all products from the database
                                $query = "SELECT * FROM products";
                                $result = mysqli_query($con, $query);

                                // Check if there are any products
                                if (mysqli_num_rows($result) > 0) {
                                    // Output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo "<a href='delete_product.php?id=" . $row['products_id'] . "' class='btn btn-danger'><i class='fa fa-trash'></i> Delete</a>";
                                        echo "<a href='update_product.php?id=" . $row['products_id'] . "' class='btn btn-primary'><i class='fa fa-pencil'></i> Update</a>";
                                        echo "</td>";
                                        echo "<td>" . $row['products_id'] . "</td>";
                                        echo "<td>" . $row['product_title'] . "</td>";
                                        echo "<td><img src='img/products/" . $row['product_img1'] . "' alt='Product Image 1' style='max-width:100px;height:auto;'></td>";
                                        echo "<td><img src='img/products/" . $row['product_img2'] . "' alt='Product Image 2' style='max-width:100px;height:auto;'></td>";
                                        echo "<td>$" . $row['product_price'] . "</td>";
                                        echo "<td>" . $row['product_keywords'] . "</td>";
                                        echo "<td>" . $row['product_desc'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='8'>No products found.</td></tr>";
                                }

                                // Close the database connection
                                mysqli_close($con);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
