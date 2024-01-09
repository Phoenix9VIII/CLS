<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="container">
        <img class="mt-2" style="width: 20%; display: block; margin: auto;" src="../img/logo.png">
        <h1 class="display-2 my-4 text-primary">Create a new account</h1>
        <form class="row" action="" method="post">
            <div class="col-12">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control mt-2 mb-3">
            </div>
            <div class="col-6">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control mt-2 mb-3">
            </div>
            <div class="col-6">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mt-2 mb-3">
            </div>
            <div class="col-4">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control mt-2 mb-3">
            </div>
            <div class="col-4">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control mt-2 mb-3">
            </div>
            <div class="col-4">
                <label for="city_id">City</label>
                <select name="city_id" id="city_id" class="form-select mt-2 mb-3">
                    <?php 
                    $connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
                    $sql = "SELECT * FROM cities";
                    $cities = mysqli_query($connection, $sql);
                    while ($city = mysqli_fetch_assoc($cities)) {
                    ?>
                        <option value="<?php echo $city["id"]; ?>">
                            <?php echo $city["name"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>            
            <button type="submit" class="btn btn-primary col-4 offset-4">Create account</button>
            <p class="text-center mt-4">Already have an account? 
                <a href="../auth/sign-in.php">Sign in</a>
            </p>
        </form>
    </div>




    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>