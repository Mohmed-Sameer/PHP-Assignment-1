<?php
require_once('database.php');
$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Portal</title>
    <meta name="description" content="Employee portal for tracking hours worked and other employee information">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	
    <script src="https://cdn.jsdelivr.net/npm bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <div class="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./img/php-logo.png" alt="header logo"></a>
        </div>
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul class="sidebarMenuInner">
                <li>Employee Portal <span>HR Manager</span></li>
                <li><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li><a class="nav-link" href="view.php">Employee List</a></li>
            </ul>
        </div>
    </div>
</header>

<section >
    <div>
        <h1></h1>
    </div>
</section>

<main class="container">
    <div class="row">
        <table class="table">
            <tr>
				<div class="view">
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Hours Worked</th>
                <th>Salary</th>
</div>
            </tr>
            <?php
            while ($r = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['hours_worked'] ?></td>
                    <td><?php echo $r['salary'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</main>
</body>
</html>