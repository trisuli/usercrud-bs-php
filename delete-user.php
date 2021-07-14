<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <title>Delete User | User CRUD With Bootstrap And PHP</title>
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
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-black">Are You Sure You Want To Delete This User?</h5>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <a href="#" class="btn btn-outline-danger col-2">Yes, Confirm</a>
                            <a href="index.php" class="btn btn-outline-secondary col-2">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
           
        </main>


        <script src="assets/vendors/jQuery/jquery.js"></script>
        <script src="assets/vendors/bootstrap/js/bootstrap.js"></script>
        <script src="assets/custom/js/script.js"></script>
        
    </body>
</html>
