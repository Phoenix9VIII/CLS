<?php 
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'my_tasks');
if(isset($_POST ["email"]) && $_POST ["email"]!= "" && $_POST ["password"]!= ""){
    $email = $_POST ["email"];
    $password = $_POST ["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result_set = mysqli_query($connection, $sql);
    $numOfUsers = mysqli_num_rows($result_set);

    if($numOfUsers == 1){

            $user = mysqli_fetch_assoc($result_set);
            if(password_verify($password, $user["password"])){
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["user_email"] = $user["email"];
                if(isset($_SESSION["back_to"])){
                    $back_to = $_SESSION["back_to"];
                    header("Location: $back_to");
                } else {
                    header("Location: ../includes/index.php");
                }
            } else {
                $password_error = "This Password is Incorrect";  
}

    }elseif($numOfUsers == 0){
        $error = "This Email Doesn't Match Our Records";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Your Account</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="container">
        <img class="mt-2" style="width: 20%; display: block; margin: auto;" src="../img/logo.png">
        <h1 class="display-2 my-4 text-primary">Login to Your Account</h1>
        <?php if(isset($_SESSION["login_error"])){ ?>
                        <p class = "alert alert-danger"><?php echo $_SESSION["login_error"]; ?></p>
                    <?php }?>
        <form class="row" action="../auth/sign-in.php" method="post">
            <div class="col-6">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control mt-2 mb-3">
                <?php if(isset($error)){ ?>
                        <p class = "alert alert-danger"><?php echo $error; ?></p>
                    <?php }?>
            </div>
            <div class="col-6">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mt-2 mb-3">
                <?php if(isset($password_error)){ ?>
                        <p class = "alert alert-danger"><?php echo $password_error; ?></p>
                    <?php }?>
            </div>
            <button type="submit" class="btn btn-primary col-2 offset-5">Login</button>
            <p class="text-center mt-4">Don't have an account ? 
                <a href="../auth/register.php">Create one</a>
            </p>
        </form>
    </div>




    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>