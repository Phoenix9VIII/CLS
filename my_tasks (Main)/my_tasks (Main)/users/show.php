<?php
$id = $_GET["uid"];
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "SELECT * FROM users WHERE id = $id";
$data = mysqli_query($connection, $sql);
$user = mysqli_fetch_assoc($data);

$sql2 = "SELECT * FROM tasks WHERE user_id = $id";
$user_tasks = mysqli_query($connection, $sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User Details - My Tasks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <?php include '../includes/menubar.php'; ?>
    <div class="container">
        <h1 class="display-1 my-5 text-primary">Show User Details</h1>        
        <div class="row mb-5">            
            <div class="col-8">
                <h1>Username:      <?php echo $user["name"];    ?></h1>
                <h1>Email Address: <?php echo $user["email"];   ?></h1>
                <h1>Phone:         <?php echo $user["phone"];   ?></h1>
                <h1>Address:       <?php echo $user["address"]; ?></h1>
                <h1>City:          <?php echo $user["city_id"]; ?></h1>
            </div>
            <img id="profile-picture" class="col-4" src="../img/users/<?php echo $user["image"]; ?>">
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <th>Task Name</th>
                    <th>Description</th>
                    <th>Due Date</th>
                </tr>
                <?php while($task = mysqli_fetch_assoc($user_tasks)) { ?>
                <tr>
                    <td><?php echo $task["name"]; ?></td>
                    <td><?php echo $task["description"]; ?></td>
                    <td><?php echo $task["due_date"]; ?></td>
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