<?php

$con= mysqli_connect('localhost','root','','hostel');
    function showData()
    {
        global $con;

        $query="SELECT * FROM `complaint`";
        $run=mysqli_query($con,$query);
        if($run==true)  
        {
        ?>
        <div class="container">
        <table border="1" width="100%"><tr id="a">
            <thead>
                <td>id</td> <td>name</td><td>email</td><td>phoneNo</td><td>subject</td></tr>
        </thead>
         <?php   while($data=mysqli_fetch_assoc($run))
         
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $data['id'];    ?></td>
                        <td><?php echo $data['Name'];    ?></td>
                        <td><?php echo $data['EmailID'];    ?></td>
                        <td><?php echo $data['PhoneNo'];    ?></td>
                        <td><?php echo $data['Subject'];    ?></td>
                        </tr>



<?php
            }
?>
</tbody>
</table>
        </div>

            <?php


        }
        else{
            echo "error";
        }
}


?>
<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="header.css">
<style>










*{
    margin:0;
    padding:0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.header
{
    width:100%;
    height:70px;
    background-color: #333;
    color:white;
}
.left{
    padding: 20px;
    font-size: 17px;
    float:left;
    color:#266198;
    cursor: pointer;   
}
.left:hover{
    height: 100vh;
}
.left:hover .sidebar{
    display: block;
}
.right
{
    text-align: right;
    width: 10%;
    line-height: 70px;
    float:right;
    background-color: slateblue;
    
}.right ul{
    list-style: none;
}
.right ul li{
    background-color:rgb(27, 29, 31);
    height:70px;
    text-align:center;
    cursor: pointer;
}
.right ul ul{
            display:none;
    }
    .right ul li:hover > ul{
display:block;
    }

.sidebar 
    {
        position: absolute;
        display: block;
        background-color: rgb(62, 69, 76);
        top: 70px;
        left: 0px;
        width:250px;
        height:90%;
        
    }
    .sidebar ul{
        list-style:none;
        padding:10px;
        
    }

    .sidebar ul li{
        padding:10px;
        cursor: pointer;
        color:azure;
        margin-right:10px;
        
    }   
    .material-icons
    {
        margin:0;
        font-size: 17px;
        cursor: pointer;
        color: rgb(148, 135, 135);
    }
    .sidebar ul li  .material-icons
    {
        margin:5px;
    }

    .sidebar ul li:hover > ul{
        display:block;
    }
    .sidebar ul ul{
            display:none;
    }








                











/*
    #a
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
    width:300px;
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
*/


a{
        text-decoration:none;
        color:white;
    }

html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead 
	td {
		background-color: #55608f;
	
}

tbody 
	tr 
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	
	td {
        position: relative;
    }
		td:hover 
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
    
    



</style>


    </head>
    <body>
        <?php
        showdata();
        ?>
  <div class="header">


<div class="left" id="left">Hostel Management System
    <div class="sidebar">

        <ul>
                 <li> <span class="material-icons">book</span> dashboard</li>
                <li>   <span class="material-icons">perm_identity</span>my profile</li>
                <li>   <span class="material-icons">build</span>change password</li>
                <li>   <span class="material-icons">meeting_room</span>book hostel</li>
                <li>   <span class="material-icons">description</span>room details     <ul>

                            <li>manage rooms </li>
                            <li>  add a room</li>




                </ul>
            </li>
                <li>   <span class="material-icons">access_alarm</span>access log</li>
                <li>   <span class="material-icons">subtitles</span>gate pass</li>
                <li>   <span class="material-icons">account_box</span>complaint</li>

        </ul>



</div>
</div>
<div class="right"><ul><li><img src="ts-avatar.jpg" style=" position: relative;top: 10px; width:30px;height: 30px; border-radius: 50%;" alt=""> Account

<ul >
                                <li>
                                <a href="admin-profile.php"> My Account</a>
                                </li>
                                <li><a href="logout.php">logout</a>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
</div>




</div>  

<script>
$(document.getElementsById('left')).on('click',function(){
     $(document.getElementsByClassName('sidebar')).toggleClass('slid'),
     $(document.getElementsByClassName('slid')).toggleClass('sidebar');

 });
</script>
    </body>
</html>
