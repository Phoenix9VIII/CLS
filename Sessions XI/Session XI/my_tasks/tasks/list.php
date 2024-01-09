<?php 
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "SELECT * FROM tasks";
$tasks_list = mysqli_query($connection, $sql);
$task = mysqli_fetch_assoc($tasks_list);

// echo $task ["name"];
// while ($task = mysqli_fetch_assoc($tasks_list)){
//     echo $task ["name"];
// }
// while ($w < 2){}
// for ($w = 0; $w <0; $w++){
//     $task = mysqli_fetch_assoc($tasks_list);
//     echo $task ["name"];
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks List - My Tasks</title>
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
                    <!-- <th>Description</th> -->
                    <th>Date</th>
                    <th>Due Date</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                <?php
                // $tasks = mysqli_fetch_assoc($tasks_list); echo $task["id"];
                while ($task = mysqli_fetch_assoc($tasks_list)) { ?>
                <tr>
                    <td><?php echo $task["name"] ?></td>
                    <!-- <td><?php echo $task["description"] ?></td> -->
                    <td><?php echo $task["date"] ?></td>
                    <td><?php echo $task["due_date"] ?></td>
                    <td><?php echo $task["user_id"] ?></td>
                    <td><?php echo $task["category_id"] ?></td>
                    <td>
                        <a href="../tasks/show.php?tid=<?php echo $task ["id"]; ?>;" class="btn btn-primary">View</a>
                        <a href="../tasks/edit.php?tid=<?php echo $task ["id"]; ?>;" class="btn btn-info">Edit</a>
                        <a href="../tasks/delete.php?tid=<?php echo $task ["id"]; ?>;" class="btn btn-danger">Delete</a>
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