<?php
include 'config/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Guestbook Page</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <?php include 'includes/header.php'; ?>
    </div>


    <div class="container mb-5">
        <?php include 'includes/Form.php'; ?>
    </div>

    <div class="container">
        <?php include 'includes/message-container.php'; ?>
    </div>


    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
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
</body>
</html>