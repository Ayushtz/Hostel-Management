<?php



/*

        //connect with mysql
    $con = mysqli_connect('localhost','root','');
    // Select Database
        mysqli_select_db($con,'hostel');
    // select query
    $sql = "DELETE * FROM data WHERE sno='$_GET[sno]' ";


    //execute the query
    if(mysqli_query($con,$sql))
    header("refresh:1;url=newview.php");
    else 
    echo "not deleted";


*/

$con = mysqli_connect('localhost','root','');
// Select Database
    mysqli_select_db($con,'hostel');
$sno=$_GET['sno'];
$query = "DELETE FROM DATA WHERE sno='$sno'";
$go = mysqli_query($con,$query);
if($go)
{
    header("refresh:1;url=newview.php");
}
    else 
    {

        echo "not deleted";
    



}


?>