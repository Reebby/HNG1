<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HNG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body id="content">
    
     <div class="navbar">    
            <a href=""><img src="images/arab.jpg" alt="Avatar" style="width:20px" class="avater"></a>
            <a href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a class="active" href="#about">About</a>
            <a href="#" style="float:right">SignUp</a>
            <a href="#" style="float:right">SignIn</a>
            <a href="#" style="float:right">Login</a>           
    </div>
    <div class="main">  
            <h2>  HNG INTERNSHIP <h2>
            <p>DATE: <?php echo date("d-m-Y")  ?></p> 
             <p>TIME: <?php
                  date_default_timezone_set("Africa/Lagos");
                  echo date("h:ia");  ?>
            </p> 
            <br />    
            <button>GET STARTED</button>
     </div>
    
       <div class="footer">
           <h5> All rights reserved &copy;2018 dev by rebbycodes</h5>
       </div>
        
</body>
</html>
