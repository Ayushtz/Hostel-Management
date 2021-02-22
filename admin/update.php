<?php


 //connect with mysql
 $con= mysqli_connect('localhost','root','');
 // select database
 mysqli_select_db($con,'hostel');
 
 //update query
 //$sql ="  UPDATE `data` SET `id`='$_[id]',`Name`='$_POST[Name]',`Branch`='$_POST[Branch]',`Date`='$_POST[Date]',`Subject`='$_Post[Subject]',`permission`='$_Post[permission]' WHERE s.no='$_POST[s.no]'";


 //$name=$_POST["permission"];
 //$sno=$_POST["sno"];
 
$sql = "  UPDATE data SET permission='$_POST[permission]',id='$_POST[id]',Name='$_POST[Name]',Date='$_POST[Date]',Branch='$_POST[Branch]',Subject='$_POST[Subject]'  WHERE sno='$_POST[sno]'   " ;

 //execute the query

 if(mysqli_query($con,$sql))
    header("refresh:1;url=newview.php");
    else 
    echo "not updated";



    ?>