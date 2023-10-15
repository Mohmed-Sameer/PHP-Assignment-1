<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Portal</title>
    <meta name="description" content="Employee portal for tracking hours worked and other employee information">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="C:\xampp\htdocs\Assignment 1\css\style.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body background='main background.jpg'>
  <header>
   
    <div class="header"><div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img\employee-logo.png" alt="header logo"></a></div> 
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
          <div class="spinner diagonal part-1"></div>
          <div class="spinner horizontal"></div>
          <div class="spinner diagonal part-2"></div>
        </label>
        
        <div id="sidebarMenu">
          <ul class="sidebarMenuInner">
            <li>Employee Portal<span>HR Manager</span></li>
            <li><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li><a class="nav-link" href="view.php">Employee List</a></li>
          </ul>
        </div>
</div>
        
  </header>
  <main class="container">
       <section class="form-row row justify-content-center">
             <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
                     <h2>ADD EMPLOYEES</h2>

                     <div class="form-group">
                         <label for="input" class="col-sm-2 control-label">First Name</label>
                         <div class="col-sm-10">
                             <input type="text" placeholder="Enter your first name" name="fname" class="form-control" id="input1">
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="input" class="col-sm-2 control-label">Last Name</label>
                         <div class="col-sm-10">
                             <input type="text" placeholder="Enter your last name" name="lname" class="form-control" id="input2">
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="input" class="col-sm-2 control-label">Email</label>
                         <div class="col-sm-10">
                             <input type="text" placeholder="Enter your email address" name="email" class="form-control" id="input3">
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="input" class="col-sm-2 control-label">Hours Worked</label>
                         <div class="col-sm-10">
                             <input type="number" placeholder="Enter hours worked" name="hours_worked" class="form-control" id="input4" min="1" required>
                         </div>
                      
                      <div class="form-group">
                         <label for="input" class="col-sm-2 control-label">Salary</label>
                         <div class="col-sm-10">
                             <input type="currency" placeholder="Enter your salary (e.g., $100.00)" name="salary" class="form-control" id="input5" min="0" pattern="^\$[0-9]+(\.[0-9]{2})?$" required>
                         </div>
                     </div>
                <div class="buttons">
                     <div class="form-group">
                         <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Add">
                         <input type="reset" class="btn btn-primary col-md-2 col-md-offset-10" value="Reset">
                     </div>
                </div>
             </form>
             <div class="form-group submit-message">
                <?php
                    require_once('database.php');
                    
                    if(!empty($_POST)){
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $email = $_POST['email'];
                        $hours_worked = $_POST['hours_worked'];
                        $salary = $_POST['salary'];
                        $res = $database->create($fname, $lname, $email, $hours_worked,$salary);
                        if($res){
                            echo "<p>Employee successfully added.</p>";
                        }else{
                            echo "<p>Failed to add employee. Please check your input and try again.</p>";
                        }
                    }
                 ?>
            </div>
          </section>
     </main>
   </body>
</html>
