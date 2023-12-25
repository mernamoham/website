<?php
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$gender=$_REQUEST['gender'];
if(isset($_POST['btn1']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="project_italian_recipes";

    $conn = mysqli_connect($host,$user,$password,$db);
    $insert="insert into usersinfo values('$email','$pass','$gender')";

    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style=color:black;>Done!</h1>");
    }
    else{
        echo("<h1 style=color:red;>Failed!</h1>");
    }
} 










?>