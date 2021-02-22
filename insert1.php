<?php

    $id = $_POST['id'];  
    $Name= $_POST['name'];
    $Branch = $_POST['branch'];  
    $Date= $_POST['date'];
    $Subject = $_POST['subject'];  


    $con= mysqli_connect('localhost','root','','hostel');



   
   $query= "INSERT INTO `data`( `id`, `Name`, `Branch`, `Date`, `Subject`) VALUES ('$id','$Name','$Branch','$Date','$Subject')";

    $run = mysqli_query($con,$query);
    if($run==true)
    header("refresh:1;url=index1.php");
    else
    echo "error";


?>