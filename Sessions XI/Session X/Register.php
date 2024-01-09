<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
</head>
<body>
    <form action="create.php" method="post">
        <label for="">Name</label>
        <input type="text" placeholder="Type Your Name Here" id="name" name="name">

        <label for="">Phone</label>
        <input type="text" placeholder="Type Your Phone Here" id="phone" name="phone">
        
        <label for="">Birthdate</label>
        <input type="date" id="date" name="date">

        <label for="">Email</label>
        <input type="email" placeholder="Type Your Email Here" id="email" name="email">

        <button type="submit">Create Account</button>
        <p>Already have An Account ?<a href="#">Sign in</a></p>
    </form>
</body>
</html>