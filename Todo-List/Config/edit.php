<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id = $id";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

// echo $row['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Edit Task</h1>
        <!-- You can add a subtitle or logo here -->
    </header>

    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Edit Task Form -->
                <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
                    <div class="mb-3">
                        <label for="task" class="form-label">Task</label>
                        <input type="text" class="form-control" id="task" name="task" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="../home.php" class="btn btn-secondary">Back to home</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    


    <!-- Footer Section -->
    <!-- <footer class="bg-light text-center py-3 mt-5">
        <small>&copy; 2025 Simple To-Do List</small>
    </footer> -->



    <!-- Modal Section -->



    <!-- Bootstrap JS Bundle CDN (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>