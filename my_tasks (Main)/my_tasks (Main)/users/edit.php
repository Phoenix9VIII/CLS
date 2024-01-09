<?php
$id = $_GET["uid"];
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
$sql = "SELECT * FROM users WHERE id = $id";
$data_set = mysqli_query($connection, $sql);
$user = mysqli_fetch_assoc($data_set);

/*********Get Cities List */
$sql = "SELECT * FROM cities";
$cities_list = mysqli_query($connection, $sql);
/*********Get Cities List */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - My Tasks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <?php include '../includes/menubar.php'; ?>
    <div class="container">
        <h1 class="display-1 my-5 text-primary">Edit User</h1>
        <div class="row">
            <form action="update.php" method="POST">
                <div class="row">
                    <div class="col-12">
                        <label for="name">Username</label>
                        <input type="text" value="<?php echo $user["name"]; ?>" name="name" id="name" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-6">
                        <label for="email">Email Address</label>
                        <input type="email" value="<?php echo $user["email"]; ?>" name="email" id="email" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-6">
                        <label for="password">Password</label>
                        <input type="password" value="<?php echo $user["password"]; ?>" name="password" id="password" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-6">
                        <label for="phone">Phone</label>
                        <input type="text" value="<?php echo $user["phone"]; ?>" name="phone" id="phone" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-6">
                        <label for="address">Address</label>
                        <input type="text" value="<?php echo $user["address"]; ?>" name="address" id="address" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-12">
                        <label for="city_id">City</label>                        
                        <select name="city_id" id="city_id" class="form-select mt-2 mb-3">
                            <?php while($city = mysqli_fetch_assoc($cities_list)){ ?>
                                    <option 
                                    <?php if($user["city_id"] == $city["id"]) { echo "SELECTED"; } ?> 
                                    value="<?php echo $city["id"]; ?>"><?php echo $city["name"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="../users/list.php" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/app.js"></script>
</body>
</html>