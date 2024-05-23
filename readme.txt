user credentials
-------------------
database name:fashion_retail;
username:gatetejames
password:222002143


Functionality
Admin Side
Homepage:

The admin accesses the homepage to see available products.
Admin Menu:

The admin clicks on the admin menu to log in.
Login:

Admin logs into the system to access administrative functionalities.
Product Management:

Register Product: Admin can add new products using insert-product.php.
Modify Product: Admin can update existing products using update-product.php.
Delete Product: Admin can delete products using delete-product.php.
View Products: Admin can view all products available on the website.
Order Management:

View Orders: Admin can view customer orders using view-orders.php.
Delete Order: Admin can delete delivered orders using delete-order.php.
Logout:

Admin logs out of the system using logout.php.
Customer Side
Homepage:

The customer accesses the homepage to see the products available.
Product Details:

The customer clicks on a product to view its details and is redirected to the login page if not already logged in.
Login/Register:

The customer logs in or creates an account using login.php or register.php.
Shopping:

Select Products: The customer selects the number of products, size, and price, then adds them to the cart using add-to-cart.php.
View Cart: The customer can view their cart using view-cart.php.
Order Management:

Place Order: The customer can place an order using place-order.php.
View Orders: The customer can view their orders using view-cart.php.
Profile Management:

The customer can view and edit their profile using profile.php.
Subscription:

The customer can subscribe for updates using subscription.php.
Comments:

The customer can leave comments at the bottom of the product page using comment.php.
Logout:

The customer logs out of the system using logout.php.
Usage
Admin Usage
Access the Homepage:

Navigate to the website URL.
View available products.
Login:

Click on the admin menu.
Enter admin credentials to log in.
Manage Products:

To register a product, navigate to insert-product.php, fill out the form, and submit.
To modify a product, navigate to update-product.php, update the desired fields, and submit.
To delete a product, navigate to delete-product.php, confirm deletion.
View and Delete Orders:

Navigate to view-orders.php to see all orders.
To delete an order, click the delete button next to the order.
Logout:

Click the logout button to end the session.
Customer Usage
Access the Homepage:

Navigate to the website URL.
Browse available products.
View Product Details:

Click on the desired product.
If not logged in, the system will redirect to the login page.
Login/Register:

If you have an account, log in using login.php.
If you do not have an account, click the register link to create a new account using register.php.
Add to Cart and View Cart:

Select product details and add to cart using add-to-cart.php.
View the cart and proceed to place an order using view-cart.php.
Place Order:

Confirm the items in the cart and place the order using place-order.php.
Manage Profile:

View and edit profile details using profile.php.
Subscribe and Comment:

Subscribe for updates using subscription.php.
Leave comments on product pages using comment.php.
Logout:

Click the logout button to end the session.
Additional Information
Database Connection: The db.php file contains the database connection settings. Ensure the database credentials are correct.
Security: Implement security measures such as input validation, prepared statements for SQL queries, and session management.
Styling: Customize the CSS styles in the <style> section or link to external CSS files for a consistent look and feel.
This documentation provides an overview of the Fashion Retail System's structure, functionality, and usage for both admin and customer roles. Adjust and expand the documentation as needed based on specific requirements and system updates.