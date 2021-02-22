<?php

$con= mysqli_connect('localhost','root','','hostel');
    function showData()
    {
        global $con;

        $query="SELECT * FROM `data`";
        $run=mysqli_query($con,$query);
        if($run==true)  
        {
        ?>
        <table border="1" width="80%"><tr id="a">
        <td>sno</td> <td>id</td> <td>name</td><td>branch</td><td>date</td><td>subject</td><td>permission</td></tr>
         <?php   while($data=mysqli_fetch_assoc($run))
         
            {
                ?>
                    <tr>
                        <td><?php echo $data['sno'];    ?></td>
                        <td><?php echo $data['id'];    ?></td>
                        <td><?php echo $data['Name'];    ?></td>
                        <td><?php echo $data['Branch'];    ?></td>
                        <td><?php echo $data['Date'];    ?></td>
                        <td><?php echo $data['Subject'];    ?></td>
                        <td><?php echo $data['permission'];    ?></td>
                        
                    
                       
                        </tr>
                

<?php
            }
?>
</table>

            <?php


        }
        else{
            echo "error";
        }
}


?>

<html>
    <head>
<style>


    a
    {
        background:#244c74;
        color:white;
        text-transform:uppercase;
        font-weight:bold;
        font-family: Arial, Helvetica, sans-serif;
        border:1px;
    }
table tr{
    margin-left: 10px;
    width:100px;
    text-align:center;
    background:#ecf0f1;
    border:2px solid transparent;
    border radius:3px;
    font-size:16px;
    font-weight:200px;
    padding:10px 0;
    transition:border .5s;
    font-family: Arial, Helvetica, sans-serif;
    
}
table{
    border-radius:10px;
    background-color:royalblue;
    border:2px solid;
    color:white;
    
}
table tr td{
    border-radius:8px;
    background-color:#c2c2be;
    color:#244c74;
   padding:8px; 
}

    h2{
    background-color:#244c74;
    color:white;
    text-transform:uppercase;
        font-family:Arial, Helvetica, sans-serif;
        border-radius:10px;
        border:2px solid white;

    }
    body{
       background-image:url('gp.jpg');
    }
    


</style>


    </head>
    <body>
    <h2 align="center">gatepass</h2>
        <?php
        showdata();
        ?>

    </body>
</html>
