<?php 
$id = $_GET["tid"];
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "SELECT * FROM tasks WHERE id = $id";
$data = mysqli_query($connection, $sql);
$task = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Task Details - My Tasks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '../includes/menubar.php'; ?>
    <div class="container">
        <h1 class="display-1 my-5 text-primary">Show Task Details</h1>
        <div class="row">
            <h1>Task Name: <?php echo $task["name"] ?></h1>
            <h1>Task Description: <?php echo $task["description"] ?></h1>
            <h1>Task Date: <?php echo $task["date"] ?></h1>
            <h1>Task Due Date: <?php echo $task["due_date"] ?></h1>
            <h1>Task User: <?php echo $task["user_id"] ?></h1>
            <h1>Task Category: <?php echo $task["category_id"] ?></h1>
        </div>
        <a href="../tasks/list.php" class="btn btn-secondary">Back to List</a>

    </div>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/app.js"></script>
</body>
</html>