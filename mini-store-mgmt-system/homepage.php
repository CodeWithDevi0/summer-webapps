<?php 
require 'Config/db.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
$totalProducts = count($products);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Mini Store Management System</h1>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Products list</p>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                <tr class="table-products" data-task-content="<?= strtolower(htmlspecialchars($product['product_name'] . ' ' . $product['product_price'] . ' ' . $product['product_quantity'])) ?>">
                                    <td><?= $product['id']; ?></td>
                                    <td><?= $product['product_name']; ?></td>
                                    <td>₱ <?= $product['product_price']; ?></td>
                                    <td><?= $product['product_quantity']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-buttons d-flex gap-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addProductModal" class="btn btn-primary">Add Product</a>
                        <a href="view-products.php" class="btn btn-primary">View Products</a>
                        <a href="view-customer-loans.php" class="btn btn-primary">Customer Loans</a>
                    </div>
                    <div class="status container mt-3">

                        <div class="search-bar mb-3 border border-dark rounded-3">
                            <input type="text" class="form-control" placeholder="Search here" id="searchInput" onkeyup="searchTasks()">
                        </div>

                        <div class="card mt-3 mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Products = <?= $totalProducts; ?></h5>
                            </div>
                        </div>
                        <!-- Success message -->
                        <?php if (isset($_GET['success'])): ?>
                            <div id="success-message" class="alert alert-success">
                                <?php echo $_GET['success']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modals -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./Config/add-product.php" method="post">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="productName" required>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Product Price</label>
                            <input type="number" class="form-control" id="productPrice" name="productPrice" required>
                        </div>
                        <div class="mb-3">
                            <label for="productQuantity" class="form-label">Product Quantity</label>
                            <input type="number" class="form-control" id="productQuantity" name="productQuantity" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <!-- Javascript -->
    <script>
        // Search function - simple but scalable
        function searchTasks() {
            const searchInput = document.getElementById('searchInput');
            const searchTerm = searchInput.value.toLowerCase().trim();
            const productItems = document.querySelectorAll('.table-products');
            
            productItems.forEach(function(productItem) {
                const productContent = productItem.getAttribute('data-task-content');
                
                if (productContent.includes(searchTerm)) {
                    productItem.style.display = 'table-row';
                } else {
                    productItem.style.display = 'none';
                }
            });
        }

        // Real-time search as user types
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            
            if (searchInput) {
                searchInput.addEventListener('keyup', function() {
                    searchTasks();
                });
                
                // Clear search when input is empty
                searchInput.addEventListener('input', function() {
                    if (this.value === '') {
                        const productItems = document.querySelectorAll('.table-products');
                        productItems.forEach(function(productItem) {
                            productItem.style.display = 'table-row';
                        });
                    }
                });
            }
        });


        // Wait 1 second then do everything
        setTimeout(function() {
            // Hide the message
            var msg = document.getElementById('success-message');
            if (msg) {
                msg.style.display = 'none';
            }

            // Remove success/updated parameters from URL without refreshing
            if (window.history.replaceState) {
                const cleanURL = window.location.origin + window.location.pathname;
                window.history.replaceState(null, "", cleanURL);
            }
        }, 2000);
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>