<?php
include './Config/db.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);
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


    <nav class="navbar navbar-dark bg-primary fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">My To-Do List</a>
        <div class="offcanvas offcanvas-start text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">My To-Do List</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-primary">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            </ul>
            <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
        </div>
    </div>
    </nav>


    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-4 pt-5">
        <h1>My To-Do List</h1>
        <!-- You can add a subtitle or logo here -->
    </header>

    <!-- Add Task Section -->
    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Add Task Form -->
                <!-- Modify this form to handle task addition -->
                <form class="d-flex gap-2">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Task List Section -->
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Task List -->
                <!-- Replace this with dynamic PHP or JS rendering -->
                <ul class="list-group">
                    <!-- Example Task Item -->
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">


                        <span><?php echo $row['id']; ?></span>
                        <span><?php echo $row['name']; ?></span>
                        <span>
                            <a href="./Config/edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-sm btn-outline-success me-2">Edit</button></a>
                            <a href="./Config/delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-sm btn-outline-danger">Delete</button></a>
                        </span>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>




    <!-- Footer Section -->
    <!-- <footer class="bg-light text-center py-3 mt-5">
        <small>&copy; 2025 Simple To-Do List</small>
    </footer> -->



    <!-- Modal Section -->

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Add Task</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./Config/add.php" method="post">
        <div class="modal-body d-flex gap-2">
                <input type="text" class="form-control" name="task" placeholder="Enter a new task">
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Customer support</button>
        </div>
        </div>
    </div>
    </div>



    <!-- Bootstrap JS Bundle CDN (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>