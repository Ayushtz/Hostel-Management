
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="">
<style>



a{
    text-decoration:none;
    color:white;
}
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















  h3{
    border:2px solid;
    border-radius:2px;
    padding-top:10px;
    
  
  }
body {
  background-color:grey;
                    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                  
                    background-image: url(gp.jpg);
                    font-size:12px;
                    
    }
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  
}
input{
border:2px solid;
background-color:#d4d8dd;
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}

input[type=submit] {
  width:90px;
    
    color:#1b558f;
    border-radius:10px;
    height:50px;
    margin-top:0px;
}

input[type=submit]:hover {
  
  color:white;
  border:3px solid;

}
input:hover
{
    
    background-color: #325d88;
    color:white;

}
.container {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
  height:530px;
  margin-top:40px;
  width:700px;
  margin-left:500px;
  
  
}
input[type=text]:hover
{
    
    background-color: grey;

}
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

                                        <ul>
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
















<h3 style="background-color:#325d88;height:50px;line-height:30px;text-align:left;color:white;width:1284px;margin-left:250px;">Complaint Form</h3>

<div class="container">
  <form action="contact.php"method="post">
    <label for="fname">First Name</label>
    <input type="text"  name="name" placeholder="Your name.."required="required">

    <label for="Email">Email</label>
    <input type="text" name="email" placeholder="Your email.."required="required">



 <label for="Email">Phone No</label>
    <input type="text" name="phoneno" placeholder="Your phone no.."required="required">
   
    </select>

    <label for="subject">Subject</label>
    <textarea  name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit"onclick="contactus.php">
  </form>
</div>

</body>
</html>
