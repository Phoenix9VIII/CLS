<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../includes/index.php" style="display: flex; align-items: center;">
            <img style="height: 35px; margin-right: 10px;" src="../img/logo.png"> 
            <span style="font-weight: 700;">Power Tasks</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-list-check"></i> Tasks
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../tasks/list.php"><i class="fa-solid fa-list-check"></i> Tasks List</a></li>
                <li><a class="dropdown-item" href="../tasks/new.php"><i class="fa-regular fa-square-plus"></i> New Task</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../tasks/search-by-date.php"><i class="fa-solid fa-calendar-days"></i> Search By Date</a></li>
                <li><a class="dropdown-item" href="../tasks/search-by-name.php"><i class="fa-solid fa-signature"></i> Search By Name</a></li>
                <li><a class="dropdown-item" href="../tasks/search-by-field.php"><i class="fa-solid fa-table-columns"></i> Search By Field</a></li>
                <li><a class="dropdown-item" href="../tasks/search-all.php"><i class="fa-solid fa-magnifying-glass"></i> Search All</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../tasks/trash.php"><i class="fa-solid fa-trash-can"></i> Tasks Trash</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-users"></i> Users
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../users/list.php"><i class="fa-solid fa-users"></i> Users List</a></li>
                <li><a class="dropdown-item" href="../users/new.php"><i class="fa-solid fa-user-plus"></i> New User</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../users/search-by-phone.php"><i class="fa-solid fa-calendar-days"></i> Search By Phone</a></li>
                <li><a class="dropdown-item" href="../users/search-by-name.php"><i class="fa-solid fa-signature"></i> Search By Name</a></li>
                <li><a class="dropdown-item" href="../users/search-by-field.php"><i class="fa-solid fa-table-columns"></i> Search By Field</a></li>
                <li><a class="dropdown-item" href="../users/search-all.php"><i class="fa-solid fa-magnifying-glass"></i> Search All</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../users/trash.php"><i class="fa-solid fa-trash-can"></i> Users Trash</a></li>
            </ul>
            </li>
        </ul>
        </div>
        <a class = "btn btn-primary" href=" ../auth/sign-out.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>
</nav>