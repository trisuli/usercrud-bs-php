<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <title>Add User| User CRUD With Bootstrap And PHP</title>
        <link href="assets/vendors/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="assets/vendors/fontawesome/css/font-awesome.css"rel="stylesheet">
        <link href="assets/custom/css/style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/projectmantra_white_logo.png" height="30px" width="auto"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="index.php">Home</a> 
                    </li>
                </ul>
            </div>
        </nav>
        <main style="padding-top:100px">
            <div class="container">
                <div class="card shadow-sm">
                <form method="POST" action="save.php">
                    <div class="card-header">
                        <div class="display-6">Add a User</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="firstname" class="form-label">Enter Your First Name</label>
                            <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="Enter Your First Name">
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="form-label">Enter Your Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Your Last Name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Enter Your Email Id</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Enter Your Phone No.</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone No.">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-success" value="Submit">
                            <a href="index.php" class="btn btn-outline-danger">Cancel</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </main>


        <script src="assets/vendors/jQuery/jquery.js"></script>
        <script src="assets/vendors/bootstrap/js/bootstrap.js"></script>
        <script src="assets/custom/js/script.js"></script>
        
    </body>
</html>
