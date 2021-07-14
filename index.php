<?php
    $connection = mysqli_connect("localhost","root","","project_users");

    if($connection === false){
        die("ERROR: could not establish a connection" . mysqli_connect_error());
    }

    $userid= $_GET['id'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <title>User CRUD With Bootstrap And PHP</title>
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
                <div class="container-fluid" id="add-user">
                    <a href="add-user.php" class="btn btn-success">Add New User</a>
                </div>

            <table class="table" style="padding-top: 25px">
                <thead class="thead-dark">
                    <tr>
                        <th scoop="col">#</th>
                        <th scoop="col">Name</th>
                        <th scoop="col">Email Id</th>
                        <th scoop="col">Phone No.</th>
                        <th scoop="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query ="SELECT * FROM users";
                    if($query_data = mysqli_query($connection,$query)){
                        if(mysqli_num_rows($query_data)>0){
                            while($row = mysqli_fetch_array($query_data)){
                                
                                    echo "<tr>";
                                        echo "<td>" .$row['id']. "</td>";
                                        echo "<td>" .$row['firstname']." ".$row['lastname']. "</td>";                                     
                                        echo "<td>" .$row['email']. "</td>";
                                        echo "<td>" .$row['phone']. "</td>";
                                        echo'<td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="edit-user.php?id='.$row['id'].'" class="text-center"><span class="fa fa-pencil-square-o"></span></a>
                                                    </div>
                                                <div class="col-md-6">
                                                        <a href="delete-user.php?id='.$row['id'].'" class="text-center"><span class="fa fa-trash"></span></a>
                                                </div>
                                            </td>';
                                    echo "</tr>";
                                }
                        }else{
                            echo  "Table empty";
                        }
                    }else{
                            echo "<br>Failed to execute" . $query .mysqli_error($connection);
                        }
                        mysqli_close($connection);
                    ?>
                    </tbody>
                </table>
            </div>
        </main>


        <script src="assets/vendors/jQuery/jquery.js"></script>
        <script src="assets/vendors/bootstrap/js/bootstrap.js"></script>
        <script src="assets/custom/js/script.js"></script>
        
    </body>
</html>
