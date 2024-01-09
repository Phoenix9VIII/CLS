<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "SELECT tasks.*, users.name AS username, categories.name AS categoryname FROM tasks, users, categories WHERE users.id = tasks.user_id AND categories.id = tasks.category_id AND tasks.active = 2";
$tasks_list = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks Trash - My Tasks</title>
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
        <h1 class="display-1 my-5 text-danger"><i class="fa-solid fa-trash-can"></i> Tasks Trash</h1>
        <div class="row">
            <table class="table table-striped table-bordered">
                <tr class="table-dark">
                    <th>Name</th>
                    <th>Date</th>
                    <th>Due Date</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                <?php while ($task = mysqli_fetch_assoc($tasks_list)) { ?>
                    <tr>
                        <td><?php echo $task["name"]; ?></td>
                        <td><?php echo $task["date"]; ?></td>
                        <td><?php echo $task["due_date"]; ?></td>
                        <td><?php echo $task["username"]; ?></td>
                        <td><?php echo $task["categoryname"]; ?></td>
                        <td>
                            
                            <a href="../tasks/soft-delete.php?tid=<?php echo $task["id"]; ?>&action=restore" class="btn btn-success"><i class="fa-solid fa-arrow-rotate-left"></i> Restore</a>
                            <a href="../tasks/soft-delete.php?tid=<?php echo $task["id"]; ?>&action=deleteForever" class="btn btn-danger"><i class="fa-solid fa-fire"></i> Delete Permanently</a>
                        </td>
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