<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <title>
            gate_pass
        </title>
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









        textarea{
            width:400px;
            margin-left:100px;
            border:3px solid ;
    background:#d4d8dd;
    color:#325d88;
    font-size: 12px;
    line-height:25px;
    padding:10px 0;
    border-radius:10px;
    
    text-align: left;
    margin-left: 100px;
    padding-left:20px;
        }
           #head{
                    background-color:#0d3761;
                    font-family:  -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;  
                    color:white;
                    border:3px solid;
                    border-radius:1px;
                    letter-spacing:3px;
                    margin-left:250px;
            }
                body{
                    background-color:grey;
                    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                    text-transform:none;
                    background-image: url(gp.jpg);
                    font-size:14px;
                    font-weight:0px;
                }
                input[type=text]

                {
                    border:2px solid;
                margin-right:500px;    
                text-align: left;
                padding-left:20px;
                width:400px;
                border-radius:10px;
                font-family:  -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;;
                

                
                }
                .middle
                {
                    
                        margin-top:90px;
                        background-color:white;
                        width:600px;
                        margin-left:400px;
                        height:460px;
                        border-radius:15px;
                        font-weight:0px;
                        
                }
                input{
                    border:none;
                    
    background:#d4d8dd;
    color:#325d88;
    font-size: 14px;
    line-height:25px;
    padding:5px 0;
    border-radius:3px;
    width:340px;
    text-align: center;
    margin-left: 100px;
    letter-spacing:4px;
                   
                }
               
}
input[type=submit]
{
    width:90px;
    margin-left:250px;
    color:#1b558f;
    border-radius:10px;
    margin-top:5px;
    
    
}
input[type=text]:hover
{
    
    background-color: white;
}
 input[type=submit]:hover {
  background-color: #0d3761;
  
  color:#fff;

box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
  background:#2196f3;
}




a{
    text-decoration:none;
    color:white;
}

/*
a{
    letter-spacing:3px;
    margin-left:40px;
    position:relative;
    display: inline-block;
    overflow:hidden;
    transition:0.2s ease;
    color:#325d70;
    text-decoration:none;

}

a:hover{
    color:#255784;
    background:#2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    transition-delay:1s;
    
}

a span 
{
    position : absolute;
    display:block;

}
 a span:nth-child(1)
 {
     top: 0;
     left:-100%;
     width:100%;
     height:2px;
     background: linear-gradient(90deg,transparent,#2196f3);
 }
 a:hover span:nth-child(1)
{
    left:100%;
    transition:1s;
}
a span:nth-child(3)
 {
     bottom: 0;
     right:-100%;
     width:100%;
     height:2px;
     background: linear-gradient(270deg,transparent,#2196f3);
 }
 a:hover span:nth-child(3)
{
    right:100%;
    transition:1s;
    transition-delay:0.5s;
}





a span:nth-child(2)
 {
     top: -100%;
     right:0;
     width:2px;
     height:100%;
     background: linear-gradient(180deg,transparent,#2196f3);
 }
 a:hover span:nth-child(2)
{
    top:100%;
    transition:1s;
    transition-delay:0.25s;
}





a span:nth-child(4)
 {
     bottom: -100%;
     left:0;
     width:2px;
     height:100%;
     background: linear-gradient(360deg,transparent,#2196f3);
 }
 a:hover span:nth-child(4)
{
    bottom:100%;
    transition:1s;
    transition-delay:0.75s;
}



*/








/*#but
{
    color:#1b68b4;
    border-radius:10px;
    border:2px solid;
    width:80px;
    height:30px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    margin-left: 150px;
    
    


}
#but:hover{
    color:#faf8f9;
    background-color: #073563;

}*/

        </style>
    </head>
    <body>
    <div class="header">


<div class="left" id="left">Hostel Management System
    <div class="sidebar">

        <ul>
       
        
                 <li><a href="dashboard.php"> <span class="material-icons">book</span> dashboard</a></li>
                <li> <a href="my-profile.php">  <span class="material-icons">perm_identity</span>my profile</a></li>
                <li>  <a href="change-password.php"> <span class="material-icons">build</span>change password</a></li>
                <li> <a href="book-hostel.php">  <span class="material-icons">meeting_room</span>book hostel</a></li>
                <li>  <a href="room-details.php"> <span class="material-icons">description</span>room details  </a>  


               
            </li>
                <li> <a href="access-log.php">  <span class="material-icons">access_alarm</span>access log</a></li>
                <li> <a href="index1.php">  <span class="material-icons">subtitles</span>gate pass</a></li>
                <li> <a href="contactus.php">  <span class="material-icons">account_box</span>complaint</a></li>

        </ul>



</div>
</div>
<div class="right"><ul><li><img src="ts-avatar.jpg" style=" position: relative;top: 10px; width:30px;height: 30px; border-radius: 50%;" alt=""> Account

<ul >
                                <li>
                                <a href="dashboard.php"> My Account</a>
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
        <div id="head">
            <h2 align="left">Gate Pass</h2>
           
        </div>
        <div class="middle">
        <form action="insert1.php" method="post">
            
            <br><td><input type="text"name="id"placeholder="id"autocomplete="off" required="required"><br>
            <br><input type="text"name="name"placeholder="name"autocomplete="off" required="required"><br>
            <br><input type="text"name="branch"placeholder="branch"autocomplete="on" required="required"><br>
            <br><input type="text"name="date"placeholder="yyyy/mm/dd"autocomplete="on" required="required"><br>
            <br><textarea type="text"name="subject"placeholder="subject"rows="5"cols="20"autocomplete="off" required="required"></textarea><br>
            
            <br><input type="submit"value="submit"><br><br>
          <a  href="search.php"style="margin-left:550px;color:white;font-weight:bold;letter-spacing:3px;font-size:16px; border:1px solid;">   <span></span>
                                        <span></span>
                                        <span></span>    
                                        <span></span>           
                                                    search
                                        
                                        </a>
            
           <h3> <a href="viewgatepass.php"style="color:black;">status</a></h3>

        </form>
        </div>
    </body>
</html>


