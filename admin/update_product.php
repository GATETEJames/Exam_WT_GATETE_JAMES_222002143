<?php
include('../db.php');

// Check if product ID is set
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    // Fetch product details from the database
    $select_query = "SELECT * FROM products WHERE products_id = $product_id";
    $select_result = mysqli_query($con, $select_query);

    if($select_result && mysqli_num_rows($select_result) > 0) {
        $row = mysqli_fetch_assoc($select_result);
        // Now you have the product details, you can use them to populate the update form
        $product_title = $row['product_title'];
        $product_img1 = $row['product_img1'];
        $product_img2 = $row['product_img2'];
        $product_price = $row['product_price'];
        $product_keywords = $row['product_keywords'];
        $product_desc = $row['product_desc'];
    } else {
        // Product not found, redirect to view products page
        header("Location: view_products.php");
        exit();
    }
} else {
    // Product ID not set, redirect to view products page
    header("Location: view_products.php");
    exit();
}

// Check if form is submitted for updating product
if(isset($_POST['update_product'])) {
    // Retrieve form data
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    
    // Perform update operation
    $update_query = "UPDATE products SET 
                        product_title = '$product_title', 
                        product_price = '$product_price', 
                        product_keywords = '$product_keywords', 
                        product_desc = '$product_desc' 
                    WHERE products_id = $product_id";
    $update_result = mysqli_query($con, $update_query);

    if($update_result) {
        // Update successful, redirect to view products page
        echo "<script>alert('Product updated successfully.');</script>";
        echo "<script>window.location.href = 'viewproduct.php';</script>";
        exit();
    } else {
        // Update failed
        echo "<script>alert('Error updating product.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <h2>Update Product</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_title">Product Title:</label>
                <input type="text" class="form-control" id="product_title" name="product_title" value="<?php echo $product_title; ?>" required>
            </div>
            <div class="form-group">
                <label for="product_price">Product Price:</label>
                <input type="text" class="form-control" id="product_price" name="product_price" value="<?php echo $product_price; ?>" required>
            </div>
            <div class="form-group">
                <label for="product_keywords">Product Keywords:</label>
                <input type="text" class="form-control" id="product_keywords" name="product_keywords" value="<?php echo $product_keywords; ?>" required>
            </div>
            <div class="form-group">
                <label for="product_desc">Product Description:</label>
                <textarea class="form-control" id="product_desc" name="product_desc" rows="5" required><?php echo $product_desc; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="update_product">Update Product</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
