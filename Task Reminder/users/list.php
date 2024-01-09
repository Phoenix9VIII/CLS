<?php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    $_SESSION["login_error"] = "Please Log In & Try Again.";
    $_SESSION["back_to"] = $_SERVER["REQUEST_URI"];
    header("Location: ../auth/sign-in.php");
}
// 'Alias' =>  cities.name AS cityname
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "SELECT cities.name AS cityname, users.* FROM users, cities WHERE cities.id = users.city_id";
$users_list = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List - My Tasks</title>
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
        <h1 class="display-1 my-5 text-primary">Users List</h1>
        <div class="row">
            <table class="table table-striped table-bordered">
                <tr class="table-dark">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
                <?php while ($user = mysqli_fetch_assoc($users_list)) { ?>
                    <tr>
                        <td>
                            <img class="profile-picture" src="../img/users/<?php echo $user["image"]; ?>">
                        </td>
                        <td><?php echo $user["name"]; ?></td>
                        <td><?php echo $user["email"]; ?></td>
                        <td><?php echo $user["phone"]; ?></td>
                        <td><?php echo $user["address"]; ?></td>
                        <td><?php echo $user["cityname"]; ?></td>
                        <td>

                            <a href="../users/show.php?uid=<?php echo $user["id"]; ?>" class="btn btn-primary">View</a>
                            <a href="../users/edit.php?uid=<?php echo $user["id"]; ?>" class="btn btn-info">Edit</a>
                            <a href="../users/delete.php?uid=<?php echo $user["id"]; ?>" class="btn btn-danger">Delete</a>
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