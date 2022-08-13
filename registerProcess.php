<?php
$firstName = $_POST["FirstName"];
$lastName = $_POST[ 'LastName' ];
$email = $_POST[ 'Email' ];
$password = $_POST[ 'Password' ];  
$password_confirm = $_POST[ 'password-check' ];
$studentNum= $_POST[ 'studentNum' ];

$conn=pg_connect("host=localhost port=5433 user=postgres password=tlsql12! dbname=postgres");

if(empty($firstName)){
    header("location:register.php?error=Please put your first name. ");
    exit();
}

if(empty($lastName)){
    header("location:register.php?error=Please put your last name. ");
    exit();
}

if(empty($email)){
    header("location:register.php?error=Please put your email. ");
    exit();
}

if(empty($password)){
    header("location:register.php?error=Please put your password. ");
    exit();
}

if(empty($password_confirm)){
    header("location:register.php?error=Please put your confirm password. ");
    exit();
}

if(empty($studentNum)){
    header("location:register.php?error=Please put your student number. ");
    exit();
}

if($password!==$password_confirm){
    header("location:register.php?error=Password is not matched. ");
    exit();
}

else {
    $sql = "SELECT * FROM student1 where studentNum=$studentNum;";
    $result = pg_exec( $conn, $sql ); 
    if(pg_num_rows($result)>0){
        header("location:register.php?error=Duplicated student number. ");
        exit();
    }
    else{
        $sql_add_user = "INSERT INTO student1 ( firstname, studentnum, password, lastname, email ) 
        VALUES ( '$firstName', '$studentNum', '$password','$lastName','$email' );";
        pg_query( $conn, $sql_add_user );

        if($sql_add_user){
            echo"<script>alert('Registered Successfully');
            location.replace('login.php');
            </script>";
        }
    }
}
?>