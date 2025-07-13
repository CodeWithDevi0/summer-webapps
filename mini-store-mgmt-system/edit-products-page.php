<?php
include './Config/db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Edit Products</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h1>Edit Products</h1>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Search Product" id="searchInput" onkeyup="searchTasks()">
            </div>
            <div class="col-md-4 d-flex justify-content-end align-items-center">
                <a href="homepage.php" class="btn btn-primary">Home</a>
            </div>
        </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr class="table-products" data-task-content="<?= strtolower(htmlspecialchars($row['product_name'] . ' ' . $row['product_price'] . ' ' . $row['product_quantity'])) ?>">
                <td><?= $row['id']; ?></td>
                <td><?= $row['product_name']; ?></td>
                <td><?= $row['product_price']; ?></td>
                <td><?= $row['product_quantity']; ?></td>
                <td>
                    <a href="Config/edit-product.php?id=<?= $row['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                    <a href="Config/delete-product.php?id=<?= $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    </div>


    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Search function - simple but scalable // 
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

        // Real-time search as user types //
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');

            if (searchInput) {
                searchInput.addEventListener('keyup', function() {
                    searchTasks();
                });

                // Clear search when input is empty //
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

        // success message //
        // setTimeout(function() {
        //     // Hide the message
        //     var msg = document.getElementById('success-message');
        //     if (msg) {
        //         msg.style.display = 'none';
        //     }

        //     // Remove success/updated parameters from URL without refreshing
        //     if (window.history.replaceState) {
        //         const cleanURL = window.location.origin + window.location.pathname;
        //         window.history.replaceState(null, "", cleanURL);
        //     }
        // }, 2000);

    </script>
</body>
</html>