<?php
include('../db.php');

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    // Delete product from the database
    $delete_query = "DELETE FROM products WHERE products_id = $product_id";
    $delete_result = mysqli_query($con, $delete_query);

    if($delete_result) {
        echo "<script>alert('Product deleted successfully.');</script>";
        echo "<script>window.location.href = 'viewproduct.php';</script>";
    } else {
        echo "<script>alert('Error deleting product.');</script>";
        echo "<script>window.location.href = 'viewproduct.php';</script>";
    }
} else {
    echo "<script>window.location.href = 'viewproduct.php';</script>";
}
?>
