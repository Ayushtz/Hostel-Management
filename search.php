<?php
/*
$id = $_POST['id'];  
$Name= $_POST['Name'];
$Branch = $_POST['Branch'];  
$Date= $_POST['Date'];
$Subject = $_POST['Subject'];  
$permission = $_POST['permission'];  
*/

        #$con= mysqli_connect('localhost','root','','hostel');

        #include 'connection.php';
        #        $con = mysqli_connect('localhost','root','','hostel');



        $con= mysqli_connect('localhost','root','');
        // select database
        mysqli_select_db($con,'hostel');




?>



<html>
        <head>
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
        display: none;
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



                </style>
                <title>
                    professional search bar

                </title>
                <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel ="stylesheet" href = "goto.css" />
                <script type = "text/javascript">

                        function active(){
                                var searchBar = document.getElementById('searchBar');
                                if(searchBar.value == 'Search...'){
                                        searchBar.value = ''
                                        searchBar.placeholder ='Search...'

                                }
                        } 

                        function inactive(){
                                var searchBar = document.getElementById('searchBar');
                                if(searchBar.value == ''){
                                        searchBar.value = 'Search...'
                                        searchBar.placeholder =''

                                }
                        } 
                
                
                </script>



                

        </head>
        <body>
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

                                        <ul>
                                            <li>
                                                My Account
                                            </li>
                                            <li>
                                                logout
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


     
                        <div id ="top">

                <form action ="" method="get" >

                    <input type="text" id="searchBar"name="id" placeholder =""  value ="Search..."maxlength="3" autocomplete="off"onMouseDown ="active();" onBlur ="inactive();"/><input type ="submit" id= "searchBtn" value ="Go!" />



                </form>

                        </div>
                        <div class ="container">
                        <table border ="1" cellpadding= "7" style= "margin-top:100px;color:none; width:100%">
                                <thead>
                                        <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Branch</th>
                                                <th>Date</th>
                                                <th>Subject</th>
                                                <th>permission</th>


                                        </tr>
                                </thead>



                                                <?php
                                                
                                                if(isset($_GET['id']))


                                                {
                                                                $roll=$_GET['id'];
                                                                $go= "SELECT * FROM `data` WHERE `id`='$roll'";
                                                                $res=mysqli_query($con,$go);

                                                                while($result=mysqli_fetch_array($res))

                                                                

                                                {

                                                ?>
                                                        <tbody>
                                                                <tr>
                                                                
                                                                        <td><?php echo $result['id']; ?></td>
                                                                        <td><?php echo $result['Name']; ?></td>
                                                                        <td><?php echo $result['Branch']; ?></td>
                                                                        <td><?php echo $result['Date']; ?></td>
                                                                        <td><?php echo $result['Subject']; ?></td>
                                                                        <td><?php echo $result['permission']; ?></td>
                                                                       
                                                                
                                                                
                                                                
                                                                </tr>
                                                        </tbody>

                                                <?php
                                                }


                                                }
                                        
                                                ?>


                        </table>

                         </div>

        </body>
</html>