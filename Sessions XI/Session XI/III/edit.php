<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task - My Tasks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <?php include '../includes/menubar.php'; ?>
    <div class="container">
        <h1 class="display-1 my-5 text-primary">Edit Task</h1>
        <div class="row">
            <form action="update.php" method="POST">
                <div class="row">
                    <div class="col-12">
                        <label for="name">Task Name</label>
                        <input type="text" name="name" id="name" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-12">
                        <label for="description">Task Details</label>
                        <input type="text" name="description" id="description" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-6">
                        <label for="date">Task Date</label>
                        <input type="date" name="date" id="date" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-6">
                        <label for="due_date">Task Due Date</label>
                        <input type="date" name="due_date" id="due_date" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-12">
                        <label for="user_id">Username</label>
                        <input type="text" name="user_id" id="user_id" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-12">
                        <label for="category_id">Task Category</label>
                        <input type="text" name="category_id" id="category_id" class="form-control mt-2 mb-3">
                    </div>
                    <div class="col-6">
                        <input type="text" name = "task_id" id = "task_id">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="#" class="btn btn-secondary">Back to List</a>
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