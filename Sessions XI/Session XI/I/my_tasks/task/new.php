<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Task - My Task</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<?php include '../main/navbar.php'; ?>
    <div class="container">
        <h1 class="display-1 my-5 text-primary">New Tasks </h1>
        <div class="row">
            <form action="">
                <div class="row">
                    <div class="col12">
                        <label for="name">Task Name</label>
                        <input type="text" name = "name" id = "name" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col12">
                        <label for="description">Task Details</label>
                        <input type="text" name = "description" id = "description" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col6">
                        <label for="date">Task Date</label>
                        <input type="date" name = "date" id = "date" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col6">
                        <label for="due_date">Task Due Date</label>
                        <input type="date" name = "due_date" id = "due_date" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col12">
                        <label for="user_id">Username</label>
                        <input type="text" name = "user_id" id = "user_id" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col12">
                        <label for="category_id">Category</label>
                        <input type="text" name = "category_id" id = "category_id" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col6">
                        <button type ="submit" class = "btn btn-primary">Save</button>
                        <a href="#" class = "btn btn-secondary">Back To List</a>
                    </div>
                </div>
            </form>
        </div>            
    </div>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>