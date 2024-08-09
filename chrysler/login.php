<?php 
    include "conn.php";

    session_start();

    $username = $_POST ['username'];
    $pass = $_POST ['pass'];

    $query = "SELECT * FROM accounts WHERE username = '$username' AND pass = '$pass'";

    $result = $conn->query($query);

    if($result->num_rows>0){

        $row = $result->fetch_row();
        $_SESSION['username'] = $row[1];
        $_SESSION['pass'] = $row[2];
        
        echo "<script>
            alert ('Successful')
            window.location.href = 'homepage.php'
        </script>";

    }else{
        echo "<script> alert ('Try Again') </script>";
            header ("Location: registration.php");
    }

?>