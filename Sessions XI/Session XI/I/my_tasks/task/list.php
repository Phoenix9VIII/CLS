<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Task</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<?php include '../main/navbar.php'; ?>

    <div class="container">
        <h1 class="display-1 my-5 text-primary">Tasks List</h1>
        <div class="row">
            <table class = "table table-striped table-bordered">
                <tr class="table-dark">
                    <th>Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Due Date</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>   
                <tr>
                    <td>Create A New Markting Plan</td>
                    <td>This is The Description Of The Task</td>
                    <td>2023-11-05</td>
                    <td>2023-11-5</td>
                    <td>Ahmed</td>
                    <td>Markting</td>
                    <td>
                        <a class="btn btn-primary" href="#">View</a> 
                        <a class="btn btn-info" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>