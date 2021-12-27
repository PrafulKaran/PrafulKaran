<html>
<body>
    <h1>Successfully Logged In </h1>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
            *{
                /* background-color:black; */
                color:black;
                padding:0px;
                margin:0px;
            }
            h1
            {
                
                text-align:center;
                color:white;
                background-color:red;
                font-size:40px;
                text-transform:uppercase;
            }
            
            table{
                /* text-decoration:underline; */
                margin-top:40px;
            }
            table,th,td{
                background-color: pink;
                padding: 9px;
                border: 2px double white;
                text-align:center;   
            }
            a
            {   
                
                padding:10px;
                font-size:15px;
                background:red;
                color:white;
                text-decoration:none;
                position: relative;
                top:20px;
                transition:0.5s;
                left:15px;
            }
            a:hover
            {
                background:pink;
                font-size:30px;
                color:black;
                box-shadow:8px 8px 6px red;
            }
            
        </style>

</head>

<body>







<?php
$conn = mysqli_connect("localhost","root","","portfolio_registration");

// if($conn)
     // echo "Connected " ;
// else
//     echo "<br> not connected ";




    if(!isset($page))
    $page = 1 ;
else
    $page = $_GET["page"];

    // echo "<h1>Current page:" . $_GET["page"]."<BR>";
    $query = "select * from audi_registration";

$res = mysqli_query($conn,$query);
$total_records = mysqli_num_rows($res);

// echo "<br><h1> TOTAL RECORDS IN TABLE: " . $total_records . "<br>";

$records_per_page = 3;

$number_of_pages = ceil($total_records/$records_per_page);

// echo "<br> Total pages " . $number_of_pages . "<br>";

//$page = $_GET["page"];

$page_first_records = ($_GET["page"]-1)* $records_per_page;

// ECHO $page_first_records;

$limit_query = "select * from audi_registration limit ".$page_first_records.",".$records_per_page;
$result = mysqli_query($conn,$limit_query);

if (mysqli_num_rows($result)<1)
    {
        echo "<br> There is no People/ or records <br>";
    }
    else
    {   
        echo"<center><table><tr><th>Id </th><th>Name </th><th>Email </th><th>Password</th><th>Occupation </th><th>Message </th></tr>";
        while($records = mysqli_fetch_assoc($result))
        {  
            echo "<tr><td>" . $records["Arriaval_No"]."</td>
            <td>".$records["name"]."</td>
            <td>".$records["email"]."</td>
            <td>".$records["password"]."</td>
            <td>".$records["occupation"]."</td>
            <td>".$records["message"]."</td></tr>";
        }
        echo"</table></center>";
    }
    if($_GET["page"]>=2)
    echo '<a href="newdata.php?page='.($_GET["page"]-1).'">Previous</a>&nbsp;&nbsp;';

    for($i=1;$i<$number_of_pages;$i++)
    
        echo '<a href="newdata.php?page='.$i.'">'."Page ".$i.'</a>&nbsp;&nbsp;';

        if($_GET["page"]<$number_of_pages)
        echo '<a href="newdata.php?page='.($_GET["page"]+1).'">NEXT</a>';


?>




<html>
 <br><br><br><br><br>   
 <h1>Search Insert And Update</h1>
 <link rel="stylesheet" href="style.css">
</html>


<?php
 $con = mysqli_connect("localhost","root","","portfolio_registration");

 $id = $_GET["Arriaval_No"];

//  echo "<br>Arriaval_No ".$id;

 if(!isset($id))
    $id  = 1;

 $query = "Select * from audi_registration where Arriaval_No = $id";
// echo "<br> $query";
 $res = mysqli_query($con,$query);

 if(mysqli_num_rows($res)<1)
 {
    echo "<br> No record found for this Arriaval_No.....<br>";
 }
else
{
    while($record = mysqli_fetch_assoc($res))
    {
?>
<div class="contact-col contact-us">
    <form action="newdata.php" method="get" name="form1"><br><br><br><br><br><br><br><br>

        <input type="number" id="num" name="Arriaval_No" placeholder="Arriaval_No"  value="<?php echo $record["Arriaval_No"]; ?>"  required>

        <input type="text" id="name" name="name" placeholder="Enter Your Name" value="<?php echo $record["name"]; ?>" required>

        <input type="email" id="email" name="email" placeholder="Enter Your Email" value="<?php echo $record["email"]; ?>"  required>

        <input type="password" name="password" placeholder="Enter Your password" value="<?php echo $record["password"]; ?>" required>

        <input type="text" id ="occu" name="occupation" placeholder="Enter Your occupation" value="<?php echo $record["occupation"]; ?>" required> 

        <textarea rows="8" id="msg" name="message" placeholder="Tell Me About Your Self!!" value="<?php echo $record["message"]; ?>" ></textarea>



        <!-- <input type="submit" class="btn" onclick="welcome()"  onclick="method1()" value="Register Your Self" style="width:250px"></input><br><br> -->
 
        <input type="submit"  class="btn" name="action" value="search"  style="width:250px">

        <input type="submit" class="btn" name="action" value="update"onclick="form1.action='newdata.php'; return true" style="width:250px"> 
        
        <input type="submit" class="btn" name="action" value="delete"onclick="form1.action='newdata.php'; return true" style="width:250px">
    </form>
    </div>
<?php


      } // <!--closing of while loop -->
} //closing else part

?>




<?php


$con = mysqli_connect("localhost","root","","portfolio_registration");

        

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['Arriaval_No']) ? $_GET['Arriaval_No'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';
$occupation = isset($_GET['occupation']) ? $_GET['occupation'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';


if($action == "update")
        db_update($id,$name,$email,$password,$occupation,$message);
        // echo"<br> Update Button Clicked";
 else if($action == "delete")
        db_delete($id);



        Function db_update($id,$name,$email,$password,$occupation,$message)
        {
            global $con;
                $query = "update audi_registration set name ='$name',email ='$email',password= '$password',occupation = '$occupation',message ='$message' where Arriaval_No='$id'";
                
                if(mysqli_query($con,$query))
                    echo "<br> Record Updated Successfully!!! <br>";
                else
                    echo "<br> Update Operation Failed".mysqli_error($con)."<br>";
        }

        function  db_delete($id)
        {   
            global  $con;
            $query = "delete from audi_registration where Arriaval_No ='$id'";
                if(mysqli_query($con,$query))
                    echo "<br> Record deleted Successfully!!! <br>";
                else
                    echo "<br> Delete Operation Failed".mysqli_error($con)."<br>";
        }
?>
