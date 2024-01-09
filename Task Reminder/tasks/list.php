<?php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    $_SESSION["login_error"] = "Please Log In & Try Again.";
    $_SESSION["back_to"] = $_SERVER["REQUEST_URI"];
    header("Location: ../auth/sign-in.php");
}
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "SELECT tasks.*, users.name AS username, categories.name AS categoryname FROM tasks, users, categories WHERE users.id = tasks.user_id AND categories.id = tasks.category_id AND tasks.active = 1";
$tasks_list = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks List - My Tasks</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?php include '../includes/menubar.php'; ?>
    <div class="container">
        <h1 class="display-1 my-5 text-primary">Tasks List</h1>
        <div class="row">
            <table class="table table-striped table-bordered">
                <tr class="table-dark">
                    <th>Name</th>
                    <th>Date</th>
                    <th>Due Date</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                <?php while ($task = mysqli_fetch_assoc($tasks_list)) { ?>
                    <tr>
                        <td><?php echo $task["name"]; ?></td>
                        <td><?php echo $task["date"]; ?></td>
                        <td><?php echo $task["due_date"]; ?></td>
                        <td><?php echo $task["username"]; ?></td>
                        <td><?php echo $task["categoryname"]; ?></td>
                        <?php
                        $task_id = $task["id"];
                        $sql = "SELECT * FROM status_task WHERE task_id = $task_id ORDER BY date DESC LIMIT 1";
                        $statuses_list = mysqli_query($connection, $sql);
                        $task_status = mysqli_fetch_assoc($statuses_list);
                        if ($task_status["status_id"] == 1) {
                            echo "<td>
                                    <span data-bs-toggle='modal' data-bs-target='#task_$task_id' class='badge bg-warning'>To Do</span>
                                </td>";
                        } elseif ($task_status["status_id"] == 2) {
                            echo "<td>
                                    <span data-bs-toggle='modal' data-bs-target='#task_$task_id' class='badge bg-primary'>In Progress</span>
                                </td>";
                        } elseif ($task_status["status_id"] == 3) {
                            echo "<td>
                                    <span data-bs-toggle='modal' data-bs-target='#task_$task_id' class='badge bg-success'>Done</span>
                                </td>";
                        } elseif ($task_status["status_id"] == 4) {
                            echo "<td>
                                    <span data-bs-toggle='modal' data-bs-target='#task_$task_id' class='badge bg-secondary'>Postponed</span>
                                </td>";
                        }
                        ?>
                        <td>
                            <a href="../tasks/show.php?tid=<?php echo $task["id"]; ?>" class="btn btn-primary">View</a>
                            <a href="../tasks/edit.php?tid=<?php echo $task["id"]; ?>" class="btn btn-info">Edit</a>
                            <a href="../tasks/soft-delete.php?tid=<?php echo $task["id"]; ?>&action=delete" class="btn btn-danger">Delete</a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="task_<?php echo $task_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Status</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="../tasks/update_status.php">
                                        <div class="modal-body">
                                            <select class="col-12 form-select" name="status_id">
                                                <?php
                                                $sql = "SELECT * FROM statuses";
                                                $statuses_list = mysqli_query($connection, $sql);
                                                while ($status = mysqli_fetch_assoc($statuses_list)) { ?>
                                                    <option value="<?php echo $status["id"]; ?>">
                                                        <?php echo $status["name"]; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" name="task_id" value="<?php echo $task_id; ?>">
                                            <input type="hidden" name="user_id" value="1">
                                            <input type="hidden" name="date" value="<?php echo date("Y-m-d h:i:s"); ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>




    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/app.js"></script>
</body>

</html>