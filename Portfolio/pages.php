<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>



<?php
$conn = mysqli_connect("localhost","root","","portfolio_registration");

// if($conn)
//     echo "Connected " ;
// else
//     echo "<br> not connected ";

if(!isset($page))
    $page = 1 ;
else
    $page = $_GET["page"];

    echo "<h1>Current page:" . $_GET["page"];

$query = "select * from audi_registration";

$res = mysqli_query($conn,$query);
$total_records = mysqli_num_rows($res);

echo "<br><h1> TOTAL RECORDS IN TABLE: " . $total_records . "<br>";

$records_per_page = 3;

$number_of_pages = ceil($total_records/$records_per_page);


echo "<br> Total pages " . $number_of_pages . "<br>";

//$page = $_GET["page"];


$page_first_records = ($_GET["page"]-1)* $records_per_page;

//$page_first_records = ($page-1) * $records_per_page;


$limit_query ="select * from audi_registration limit " . $page_first_records . " , " . $records_per_page;


$limit_res = mysqli_query($conn,$limit_query);

 if (mysqli_num_rows($limit_res)<1)
 {
    echo "<h1>There are no records in audi_registration table <br>";
 }

 else 
 {

    ?>
    </h1>
<div align="center">
    <table class='data'>
        <tr> 
            <th> ID </th> 
            <th>fName</th> 
            <th>lName</th> 
            <th> Email </th>
            <th> phone </th> 
            <th> phone </th> 
            
        </tr>

    <?php 

    while($records = mysqli_fetch_assoc($limit_res))
    {
      ?>
    
        
        <tr>
                <td><?php echo $records["Arriaval_No"] ?> </td>
                <td><?php echo $records["name"] ?> </td>
                <td><?php echo $records["email"] ?> </td>
                <td><?php echo $records["password"] ?> </td>
                <td><?php echo $records["occupation"] ?> </td>
                <td><?php echo $records["message"] ?> </td>

        </tr>

        <?php

    }
    ?>
</table>
</div>
<p>
<?php 

}


        if($_GET["page"]>=2)
            echo '<a href="php_pagination.php?page='.($_GET["page"]-1).'">   Previous </a>';

        for($i=1;$i<$number_of_pages;$i++)
            echo '<a href="php_pagination.php?page='.$i.'">'."page: ".$i.' </a>';

        if($_GET["page"]<$number_of_pages)
            echo '<a href ="php_pagination.php?page='.($_GET['page']+1).'" >    Next </a>';
    

?>

</p>
</body>
</html>
