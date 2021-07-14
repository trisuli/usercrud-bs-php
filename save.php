<?php
    $connection = mysqli_connect("localhost","root","","project_users");

    if($connection === false){
        die("ERROR: could not establish a connection" . mysqli_connect_error());
    }
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];





    $query ="INSERT INTO users (firstname,lastname,email,phone) values('$firstname','$lastname','$email','$phone')";
    if(mysqli_query($connection,$query)){
        echo"<BR>Data added successfully";
        die('<script type="Text/javascript">window.location=\'http://localhost/usercrud-bs-php/index.php\'; </script>'); //redirect
    }else{
        echo "<br>Error: Insertion failed  $query" .mysqli_error($connection);
    }
    mysqli_close($connection);



?>