<html>
    <head>
        <title>update records</title>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="header.css">



        <style> 
    .del{
        border:3px solid grey;
        background:linear-gradient(45deg,teal,black);
        font-size:14px;
        
        
    }
    .del:hover{
        background:linear-gradient(57deg,black,red);
        border:3px;
    }
    a{
        text-decoration:none;
    }



        input[type=text].E{
                width:100px;
                height:40px;




        }


thead {
	
		background-color: #55608f;
        text-align: center;
	
}    

a{
    text-decoration:none;
    color:white;

}




        table{

            width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border:1px solid;
            margin-right:120px;
            margin-top:60px;
            
        }
        table tr{

            color:#fff;
            background-color:royalblue;
            font-family:comic sans ms;
            height:30px;
            
            
            
            
            


        }
        input[type=text].D
        {
                width:30px;
                height:40px;




        }
      
        input[type=text].A{
                width:30px;
                height:40px;




        }
        input[type=text].B{

                height:40px;
        }


        input[type=text]



{    
text-align: left;
padding-left:0px;
border-radius:0px;
font-family: comic sans ms  ;
width:200px;
box-sizing:border-box;
cursor:pointer;
background-color:white;
border:1px;
text-align:center;





}

input[type=submit]
{
    width:60px;
    margin-left:0px;
    background:linear-gradient(45deg,#325d88,teal);
    border-radius:4px;
    height:40px;
    cursor:pointer;
}
input[type=text]:hover
{
    
    background-color: #325d88;
    color:white;
    border:1px solid black;
}
 input[type=submit]:hover {
  background-color: #0d3761;
  color:#fff;
  
}
body{
    
    margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
    height: 100%;
}
.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

        
        </style>
    </head>
    <body>
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



        <?php
        //connect with mysql
        $con= mysqli_connect('localhost','root','');
        // select database
        mysqli_select_db($con,'hostel');
        
        //select query
        $sql ="SELECT * FROM `data`";


        // execute the query

        $records=mysqli_query($con,$sql);

        
        
        
        ?>

        <div class="container">
            <table>
                <thead>
                <tr>
                    <th>sno</th>
                    <th>id</th>
                    <th>name</th>
                    <th>branch</th>
                    <th>date</th>
                    <th>subject</th>
                    <th>permission</th>
                    
                    <th colspan ='2'>action</th>

                    
                </tr>
            
    </thead>

    
            <?php
            
                while($row=mysqli_fetch_array($records))

            {
                echo "<tr><form action= update.php method=post>";
               
               
                echo"<td class='C'><input type = text class = 'A' name= sno value='".$row['sno']."'></td>";
                echo"<td class='C'><input type = text class = 'D' name= id value='".$row['id']."'></td>";
                echo"<td class='C'><input type = text class = 'B' name= Name value='".$row['Name']."'></td>";
                echo"<td class='C'><input type = text class = 'B' name= Branch value='".$row['Branch']."'></td>";
                echo"<td class='C'><input type = text class = 'E' name= Date value='".$row['Date']."'></td>";
                echo"<td class='C'><input type = text class = 'B' name= Subject value='".$row['Subject']."'></td>";
            // echo  "<td class='C'>'".$row['Subject']."'</td>";
                echo"<td class='C'><input type = text class ='E' name= permission value='".$row['permission']."'></td>";
              
                echo"<td><input type = submit>";
              //echo "<td><a href =delete.php?sno=".$row['sno'].">Delete</a></td>";
               echo" <td class='del'><a href = 'delete.php?sno=$row[sno]'>Delete</a></td>";

                echo"</form></tr>"; 




                
            }


            ?>
            </table>
            </div>

    </body>
</html>



