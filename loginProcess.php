<?php
session_start();
$studentnum= $_POST[ 'studentnum' ];
$password = $_POST[ 'Password' ];  
$conn=pg_connect("host=localhost port=5433 user=postgres password=tlsql12! dbname=postgres");

if(empty($studentnum)){
    header("location:login.php?error=Please put your student number. ");
    exit();
}

if(empty($password)){
    header("location:login.php?error=Please put your password. ");
    exit();
}

else {
        
    $sql = "SELECT * FROM student1 where studentnum=$studentnum;";
    $result = pg_exec( $conn, $sql ); 

    if(pg_num_rows($result)===1){
        $row=pg_fetch_array($result);
        if($password==$row['password']){
            $_SESSION['password']=$row['password'];
            $_SESSION['studentnum']=$row['studentnum'];
            $_SESSION['firstname']=$row['firstname'];
            $_SESSION['lastname']=$row['lastname'];
            $_SESSION['email']=$row['email'];
            $_SESSION['id_last_sem']=$row['id_last_sem'];
            echo "<script>location.replace('index.php');</script>";   
        }

        else{
            header("location:login.php?error=Incorrect password. ");
            exit(); 
        }
    }
    else{
        header("location:login.php?error=Incorrect student number. ");
        exit();
    }
}
?>