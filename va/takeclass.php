


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
            <li><a href="faculty.php">FACULTY</li></a>
            <li><a href="takeclass.php">JOIN CLASS</li></a>
            <li><a href="career.php">CAREER</li></a>
            <li><a href="contactus.php">CONTACT US</li></a>
            <li><a href="about.php">ABOUT US</li></a>


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
    <title>Document</title>
    <script>
        // alert("Kindly check Timing before Join Class");
    </script>
</head>
<style>
    .class{
        text-align: center;
        width: 60%;
        border: 2px solid black;
        margin-top: 20px;
        border-radius:10px;
        display:flex ;
        margin-left:30px;
        background-color: rgb(214 229 217);
    }
    .class img{
        margin-left:60px;
        height:130px ;
        width: 100px;
    }
    h2{
        margin-top:55px;
        margin-left:55px;
        display: block;
    }
    button{
        margin-top:57px;
        margin-left:55px;
        border-radius:10px;
    }
</style>
<body>
    <h1 style="text-align:center;margin-right:520px; text-decoration:  underline  dotted black;"> Take Class According to Following Links</h1>
    <div class="class">
<img src=".\images/vivek3.png" alt="loading image"> <h2>    Class IX Lecture Link:-</h2>

    <a href="https://us05web.zoom.us/j/86501929180?pwd=SUdZMnhWUmltMjNxU2JxeUJvV1U4QT09">
        <button>Join</button></a></div>
        <br><br>
        <div style="border: 1px dotted black; width: 100%;"></div>

        <div class="class">
        <img src=".\images/vivek3.png" alt="loading image"> <h2>Class X Lecture Link  </h2>
    <a href=" https://us05web.zoom.us/j/84299404136?pwd=eUxIUEpjb1YyMkV1bk03TzhsUGdBQT09">
        <button>Join</button></a></div>
        <br><br>
        <div style="border: 1px dotted black; width: 100%;"></div>

        <div class="class">
        <img src=".\images/vivek3.png" alt="loading image">  <h2>Class XI Lecture Link </h2>
    <a href=" https://us05web.zoom.us/j/83712073185?pwd=QVhNblovdGdHRk9zT0VtUlFiRHV0UT09">
        <button>Join</button></a></div>
        <br><br>
        <div style="border: 1px dotted black; width: 100%;"></div>

        <div class="class">
        <img src=".\images/vivek3.png" alt="loading image">   <h2>Class XII Lecture Link </h2>
    <a href=" https://us05web.zoom.us/j/81259796075?pwd=clUxUVQvOVRZQ0tTeW9BQkRZRHc5Zz09">
        <button>Join</button></a></div>
        <br><br>
        <div style="border: 1px dotted black; width: 100%;"></div>
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
        <li><a href="faculty.php">Faculty</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="about.php">About Us</a></li>      
        </div>

    

        <div class="thirdcol">
            <li><a class="csc">Videos</a></li>
            <li><a href="video9.php"> Batch IX </a></li>
            <li><a href="video10.php"> Batch X</a></li>
            <li><a href="video11.php">Batch XI</a></li>
            <li><a href="video12.php">Batch XII</a></li>

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