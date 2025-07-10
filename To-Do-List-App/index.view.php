<?php
require "./Config/db.php";

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

// Check if we're editing a specific task
$editTask = null;
if (isset($_GET['edit_id'])) {
    $editId = $_GET['edit_id'];
    $editSql = "SELECT * FROM tasks WHERE id = $editId";
    $editResult = mysqli_query($conn, $editSql);
    $editTask = mysqli_fetch_assoc($editResult);
}

// Check if we're deleting a specific task
$deleteTask = null;
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteSql = "SELECT * FROM tasks WHERE id = $deleteId";
    $deleteResult = mysqli_query($conn, $deleteSql);
    $deleteTask = mysqli_fetch_assoc($deleteResult);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>To do list</title>
</head>
<body>


    <section class="board container mt-5">
        <div class="tasks row">
            <div class="col-md-4">
                <h1>To do list</h1>
            </div>
            <div class="col-md-4">
                <?php if (isset($_GET['success'])): ?>
                    <div id="success-message" class="alert alert-success text-center" role="alert">
                        Task added successfully
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['updated'])): ?>
                    <div id="success-message" class="alert alert-success text-center" role="alert">
                        Task updated successfully
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['deleted'])): ?>
                    <div id="success-message" class="alert alert-danger text-center" role="alert">
                        Task deleted successfully
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4 text-end">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">Add Task</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
            <section class="tasks">
                <div class="row">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 task-item" data-task-content="<?= strtolower(htmlspecialchars($row['task_title'] . ' ' . $row['task_description'])) ?>">
                <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between">
                            Task No. <?= $row['id'] ?>
                            <button class="tt" data-bs-toggle="popover" title="<?= htmlspecialchars($row['task_description'])?>" data-bs-content="Popover body content is set in this attribute."><i class="fa-solid fa-eye"></i></button>
                        </div>
                        <div class="card-body">
                            <figure>
                            <blockquote class="blockquote">
                                <p><?= $row['task_title'] ?></p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                <cite class="text-truncate d-block" style="max-width: 200px;">
                                    <?= htmlspecialchars($row['task_description']) ?>
                                </cite>
                            </figcaption>

                            <a href="index.view.php?edit_id=<?= $row['id'] ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href="index.view.php?delete_id=<?= $row['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a>
                            </figure>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                </div>
            </section>
            </div>


            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-header">
                        <h2>Filter</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Search your task here</h5>
                                                 <div class="input-group">
                             <input type="text" id="searchInput" class="form-control" placeholder="Search your task here">
                             <button class="btn btn-primary" id="searchBtn" onclick="searchTasks()">Search</button>
                         </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2>Task Status</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    All
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Finished
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    In Progress
                                </label>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
        </div>


        


    </section> <!-- End of Board Container -->

    

    <!-- Modal Section -->

    <!-- Add Task Modal -->
    <div class="modal fade" id="addTaskModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Task</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./Config/add.php" method="post">
        <div class="modal-body">
            <div class="mb-3">
                <input type="text" id="task-title" placeholder="Task Title Here" class="form-control" name="task_title">
            </div>
            <div class="mb-3">
                <textarea id="task-description" placeholder="Task Description Here (Optional)" class="form-control" name="task_description"></textarea>
            </div>
            <!-- <div class="mb-3">
                <input type="date" id="task-date" class="form-control">
            </div> -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
        </form>
        </div>
    </div>
    </div>


    <!-- Edit Task Modal -->
    <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editTaskModalLabel">Edit Task No. <?= $editTask ? $editTask['id'] : '' ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./Config/update.php" method="post">
            <div class="modal-body">
            <input type="hidden" id="edit-task-id" name="task_id" value="<?= $editTask ? $editTask['id'] : '' ?>">
            <div class="mb-3">
                <input type="text" id="edit-task-title" placeholder="Task Title Here" class="form-control" name="task_title" value="<?= $editTask ? htmlspecialchars($editTask['task_title']) : '' ?>">
            </div>
            <div class="mb-3">
                <textarea id="edit-task-description" placeholder="Task Description Here (Optional)" class="form-control" name="task_description"><?= $editTask ? htmlspecialchars($editTask['task_description']) : '' ?></textarea>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
        </div>
    </div>
    </div>

    <!-- Delete Task Modal -->
    <div class="modal fade" id="deleteTaskModal" tabindex="-1" aria-labelledby="deleteTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h1 class="modal-title fs-5" id="deleteTaskModalLabel">Delete Task No. <?= $deleteTask ? $deleteTask['id'] : '' ?></h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./Config/delete.php" method="post">
        <div class="modal-body">
            <!-- Hidden input to send the task ID -->
            <input type="hidden" name="task_id" value="<?= $deleteTask ? $deleteTask['id'] : '' ?>">
            
            <div class="alert alert-warning">
                <strong><i class="fa-solid fa-triangle-exclamation"></i> Warning!</strong> This action cannot be undone.
            </div>
            
            <p><strong>Task Title:</strong> <?= $deleteTask ? htmlspecialchars($deleteTask['task_title']) : '' ?></p>
            <p><strong>Description:</strong> <?= $deleteTask ? htmlspecialchars($deleteTask['task_description']) : '' ?></p>
            
            <p class="text-danger"><strong>Are you sure you want to delete this task?</strong></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete Task</button>
        </div>
        </form>
        </div>
    </div>
    </div>


    




    <!-- Scripts -->

    <script>

        // Search function - simple but scalable
        function searchTasks() {
            const searchInput = document.getElementById('searchInput');
            const searchTerm = searchInput.value.toLowerCase().trim();
            const taskItems = document.querySelectorAll('.task-item');
            
            taskItems.forEach(function(taskItem) {
                const taskContent = taskItem.getAttribute('data-task-content');
                
                if (taskContent.includes(searchTerm)) {
                    taskItem.style.display = 'block';
                } else {
                    taskItem.style.display = 'none';
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
                        const taskItems = document.querySelectorAll('.task-item');
                        taskItems.forEach(function(taskItem) {
                            taskItem.style.display = 'block';
                        });
                    }
                });
            }
        });

        // Show edit modal if editing a task
        <?php if ($editTask): ?>
        document.addEventListener('DOMContentLoaded', function() {
            var editModal = new bootstrap.Modal(document.getElementById('editTaskModal'));
            editModal.show();
        });
        <?php endif; ?>

        // Show delete modal if deleting a task
        <?php if ($deleteTask): ?>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteTaskModal'));
            deleteModal.show();
        });
        <?php endif; ?>

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

    <script>
        const tooltips = document.querySelectorAll('.tt')
        tooltips.forEach(t => {
            new bootstrap.Tooltip(t)
        })
    </script>


</body>
</html>