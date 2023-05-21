


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIVEK TUTORIALS</title>
   <style>

.logo img {
    height: 82px;
    width: 88px;
    display: inline-flex;
    border-radius: 40%;
    filter:contrast(1);
    filter: brightness(-10);
}

.logo {

    display: inline-block;

}

.nav {
    display: inline-flex;
    width: 100%;
    margin-top: 10px;
    border: 2px solid black;
    border-radius: 5px;
    background: linear-gradient(45deg, greenyellow, dodgerblue);


}

.content {
    display: inline-flex;
    margin-inline: auto;
}

.content li {
    text-align: left;
    padding: 8px;
    margin-top: 12px;
    margin-inline: auto;
    list-style-type: none;
}

.content li a {
    text-decoration: none;
    padding: 6px;
}

.content li a:hover {
    color: rgb(235, 186, 186);
    background-color: black;
    border-radius: 5px;
}

.search {

    height: fit-content;
    width: fit-content;
    text-align: center;
    margin-inline: auto;
    margin-top: 16px;


}

   </style>
    <!-- <script src="index.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>

<body>
   

    <div class="nav">

        <div class="logo">
            <img src=".\images/vivek3.png" alt="loading image">
        </div>
        <div class="content">

            <li><a href="index.php">HOME</li></a>
            <li><a href="#" onclick="alert('Please Login to continue...')">FACULTY</li></a>
            <li><a href="#"onclick="alert('Please Login to continue...')">JOIN CLASS</li></a>
            <li><a href="career.php">CAREER</li></a>
            <li><a href="contactus.php">CONTACT US</li></a>
            <li><a href="about.php">ABOUT US</li></a>


        </div>        
    </div>
</body>

</html>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    .middle{
        width: 100%;
        display: flex;
        margin-top:10px;
    }
    .left{
        width: 50%;
        margin-left: 10px;
        background-color: rgb(214 229 217);

    }
    .left h1{
        text-align: center;
    }
    .left p{
        margin-left: 22px
    }
    .right{
        width: 50%;
        border: 1px solid black;
        border-radius: 7px;
    }
    </style>
<body>
<div class="middle">
    <div class="left">
        <h1 style="font-weight: bold;">Contact Us</h1>

        <h4 style="font-weight: bold;"> <a href="adminlogin.php"><i class='far fa-user-circle'></i></a> <nbsp> Administrator</h4>
        <p  style="margin-top:0;">ABHINAY SAXENA</p>

        <div style="border: 1px dotted black; width: 50%;"></div>

        <h4 style="font-weight: bold;"> <i class="fa fa-home"></i> <nbsp> Postal Address:</h4>
        <p style="margin-top:0;"> 84, Kunwar pur office, <br> Aminabad, <br> Lucknow. <br> 226018</p>

        <div style="border: 1px dotted black; width: 50%;"></div>

        <h4 style="font-weight: bold;"> <i class="fa">&#xf095;</i> <nbsp>Contact Number:</h4>
        <p  style="margin-top:0;">9260910228</p>
        <div style="border: 1px dotted black; width: 50%;"></div>

        <h4 style="font-weight: bold;"> <i class="material-icons">&#xe0be;</i> <nbsp> Email:</h4>
        <p  style="margin-top:0;">saxenaabhinay5@gmail.com</p>
        <div style="border: 1px dotted black; width: 50%;"></div>
</div>

<div class="right">
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3559.7354788700495!2d80.9263027!3d26.8483645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDUwJzU0LjEiTiA4MMKwNTUnMzQuNyJF!5e0!3m2!1sen!2sin!4v1682148326753!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <!-- <script src="index.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<style>

.footer {
    margin-top: 40px;
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: 390px;
    list-style: none;
    width:fit-content;
    background: linear-gradient(45deg, greenyellow, dodgerblue);
    border: 2px solid black;
    border-radius:7px;
    margin-left: 50px;
    margin-bottom: 20px;
}
.csc{
    font-size:x-large;
}
.footer li{
    padding: 3px;
    margin-left: 100px;
   
   
}


.footer li a:not(.csc){
    text-decoration: none;
    color:black;
    font-size:medium;
    
}
.footer li a:not(.csc):hover{
    background-color: black;
    color:wheat;
    border-radius: 5px;
}
.csc{
    color:rgb(207, 132, 132);
    text-decoration:underline;
    text-align: center;
    justify-content: center;
    font-family: monospace;
}
.forthcol{
    margin-left: 10px;
}



</style>
<body>
    
    <div class="footer">
        <div class="firstcol " >
        <li><a  class="csc">Company</a></li>
        <li><a href=index.php>Home</a></li>
        <li><a href="#" onclick="alert('Please Login to continue...')">Faculty</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="about.php">About Us</a></li>      
        </div>

    

        <div class="thirdcol">
         <li><a  class="csc">Videos</a></li>
        <li><a href="#" onclick="alert('Please Login to continue...')"> Batch IX </a></li>  
        <li><a href="#" onclick="alert('Please Login to continue...')"> Batch X</a></li>
        <li><a href="#" onclick="alert('Please Login to continue...')">Batch XI</a></li>
        <li><a href="#" onclick="alert('Please Login to continue...')">Batch XII</a></li>
        
        </div>

        <div class="forthcol">
            <li><a class="csc">Follow Us</a></li>
            <li><a href="https://www.youtube.com/@abhinaysaxena4128/featured" class="fa fa-youtube"> YouTube</a></li>
            <li><a href="https://www.facebook.com/abhinay.saxena.319" class="fa fa-facebook"> Facebook</a></li>
            <li><a href="https://instagram.com/aabhinayrider?igshid=ZGUzMzM3NWJiOQ==" class="fa fa-instagram">Instagram</a></li>
            <li><a href="https://twitter.com/abhinayrider" class="fa fa-twitter"> Twitter</a></li>
        </div>
    </div>
   

</body>
</html>
