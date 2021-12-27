<?php
?>
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
    <title>Register Your Self</title>
    <style>
        h1{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color: red;
        }
        nav ul li a{
    color: black;
    position: relative;
    padding: 5px 0;
}
    </style>
</head>
<body><br>
    <nav>
        <img src="./img/logo.png" class="logo">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="potfolio.html">Portfolio</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        
    </nav>
    <h1>Register Here !!</h1><br><br>
    <div class="contact-col contact-us">
        <form action="connect.php" method="get" name="form1">
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            <input type="password" name="password" placeholder="Enter Your password" required>
            <input type="text" id ="occu" name="occupation" placeholder="Enter Your occupation" required> 
            <textarea rows="8" id="msg" name="message" placeholder="Tell Me About Your Self!!" required></textarea>
            <input type="submit" class="btn" onclick="welcome()"  onclick="method1()" value="Register Your Self" style="width:250px"></input><br><br>
            
        </form>

       
        <?php
            $conn = mysqli_connect("localhost","root","","portfolio_registration");

	if(!empty($_POST['login']))
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$query = "SELECT * FROM audi_registration WHERE email = '$email' AND password = '$pass'";
		
		$result = mysqli_query($conn, $query);

		$count = mysqli_num_rows($result);

		if($count>0)
		{
            header('Location: newdata.php');            

		}
		else
		{
			echo "<h4 style=color:red;>Either Email Or Password Is Wrong Or Not Registered</h4>";
		}
	}
    ?>

<form action="register.php" method="post">
            <h1>Login Here</h1><br>
            <input type="email" id="mail" name="email" placeholder="Username / Email" required>
           <input type="password" id="pass" name="pass" placeholder="Enter Your password" required>

            <input type="submit" class="btn" name="login" value="Login"  target="index.html" style="width:250px" >  

            <input type="submit" id="login_button" class="btn" name="login" value="Admin Login"  onclick="form1.action='newdata.php?page=1'; return true" target="_blank" style="width:250px">            
        </form>



    <script>
         function welcome()
        {
           var name = document.getElementById("name").value;
           var email = document.getElementById("email").value;
           var occu  = document.getElementById("occu").value;
           var msg = document.getElementById("msg").value;

           alert ("Your Name:- " + name + "\n Your email:- " + email +"\n Your Occupation :-"+ occu +"\n Your Message :- "+msg );
        }


       
        
        function method1()
        {
            var c = confirm("Are You Sure");

            if(c==true)
            {
                alert("User Is Registered");
            }
            else
            {
                alert("User want to cancel");
            }
        }




 var login_button = document.getElementById("login_button");

login_button.addEventListener("click", login);

function login()
{
if(document.getElementById("mail").value == "praful.karan@somaiya.edu" && document.getElementById("pass").value == "karan@1701" )
{
    alert("Login Successful");
}
else
{
    alert("Login Unsuccessful"); 
}
}
    </script>
</body>
</html>

