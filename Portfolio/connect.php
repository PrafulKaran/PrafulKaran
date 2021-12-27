<?php
$connection = mysqli_connect("localhost","root","");

// if($connection)
//     echo "<br>Connection successfully";
// else
//     echo "Connection failed";




    $createDB = " create database portfolio_registration";

    if(mysqli_query($connection,$createDB))
        echo "<br>Successfully Created Database";
    else
        echo "<br>Failed to create database".mysqli_error($connection)."<br>";


        if(mysqli_query($connection,"use portfolio_registration "))
        echo "<br><br>Database portfolio_registration";
    else
        echo "<br>Database not selected".mysqli_error($connection)."<br>";


        $createTBL = "create table if not exists audi_registration( name varchar(40),email varchar(40),dob varchar(20),password varchar(30),occupation varchar(30),message varchar(50))";

        if(mysqli_query($connection,$createTBL))
        echo"<br> Table created successfully";
    else
        echo "<br> Table created failed".mysqli_error($connection)."<br>";

    // $name = $_GET['name'];
    // $email = $_GET['email'];
    // $password = $_GET['password'];
    // $occupation = $_GET['occupation'];
    // $message = $_GET['message'];
   
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';
    $occupation = isset($_GET['occupation']) ? $_GET['occupation'] : '';
    $message = isset($_GET['message']) ? $_GET['message'] : '';

    $insertRec = "insert into audi_registration(name,email,password,occupation,message) values('$name','$email','$password','$occupation','$message')";

    if(mysqli_query($connection,$insertRec))
        echo"<br> header('Location: register.php');";
    else
        echo"<br> Record failed to insert".mysqli_error($connection)."<br>";

    echo "<h1>You Successfully Registered</h1>";




    $to_email = "prafulkaran7@gmail.com";
    $fromemail=  "From: praful.karan@somaiya.edu";

    if(mail($to_email,$contact,$message,$fromemail))
    {
        echo "Email successfully sent";
    }
    else{
        echo "email Not Send";
    }









    

?>

