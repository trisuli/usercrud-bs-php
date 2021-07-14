<?php
    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $connection = mysqli_connect("localhost","root","","project_users");

    if($connection === false){
        die("ERROR could not establish a connection" . mysqli_connect_error());
    }
    $query="UPDATE users SET firstname = '$firstname', lastname='$lastname',email='$email',phone='$phone' ";
    if(mysqli_query($connection,$query)){
        echo "record updated succesfully";
        // header('update.php'); //to redirect from one page to anouther
        die('<script type="Text/javascript">window.location=\'http://localhost/spw-bootstrap/index.php\'; </script>'); //redirect
    }else{
        echo "Error could not update the record $query . " . mysqli_error($connection);
        // header('update.php');
    }
    mysqli_close($connection);
?>