<?php
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
if(isset($_GET["name"])){
    $name = $_GET["name"];
    $sql = "SELECT * FROM users WHERE name LIKE '%$name%'";
} else {
    $sql = "SELECT * FROM users";
}
$users_list = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Users By Name - My Tasks</title>
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
        <h1 class="display-1 my-5 text-primary">Search Users By Name</h1>        
        <form class="row mb-3" action="../users/search-by-name.php" method="get">
            <div class="col-10">
                <input type="name" value="<?php if(isset($_GET["name"])){ echo $_GET["name"]; } ?>" name="name" id="name" class="form-control">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="../tasks/search-by-name.php" class="btn btn-secondary">Reset</a>
            </div>
        </form>        
        <div class="row">
            <table class="table table-striped table-bordered">
                <tr class="table-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
                <?php while ($user = mysqli_fetch_assoc($users_list)) { ?>
                    <tr>
                        <td><?php echo $user["name"]; ?></td>
                        <td><?php echo $user["email"]; ?></td>
                        <td><?php echo $user["phone"]; ?></td>
                        <td><?php echo $user["address"]; ?></td>
                        <td><?php echo $user["city_id"]; ?></td>
                        <td>
                            
                            <a href="../users/show.php?tid=<?php echo $user["id"]; ?>" class="btn btn-primary">View</a>
                            <a href="../users/edit.php?tid=<?php echo $user["id"]; ?>" class="btn btn-info">Edit</a>
                            <a href="../users/delete.php?tid=<?php echo $user["id"]; ?>" class="btn btn-danger">Delete</a>
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