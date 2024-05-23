<?php
include('../db.php');

// Check if the order ID is provided and valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $order_id = $_GET['id'];

    // Delete the order from the database
    $query = "DELETE FROM orders WHERE order_id = $order_id";
    $result = mysqli_query($con, $query);

    // Check if the deletion was successful
    if ($result) {
        // Redirect back to the view orders page with a success message
        header("Location: view-orders.php?status=success");
        exit;
    } else {
        // Redirect back to the view orders page with an error message
        header("Location: view_orders.php?status=error");
        exit;
    }
} else {
    // If the order ID is not provided or invalid, redirect back to the view orders page
    header("Location: view_orders.php");
    exit;
}
?>
