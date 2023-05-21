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
            filter: contrast(1);
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
            margin-top: 26px;
            margin-inline: auto;
            list-style-type: none;
        }

        .content li a {
            background-color: white;
            text-decoration: none;
            margin-top: 20px;
            font-size: 18px;
            border-radius: 5px;
        }

        .content li a:hover {
            color: white;
            background-color: black;
            border-radius: 5px;
        }
    </style>
    <!-- <script src="index.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .btn {
        margin-left: 20px;
        cursor: pointer;
        border: none;
        margin-top: 26px;
        font-size: 16.1px;
        border-radius: 5px;
    }

    .drop {
        position: relative;
        display: inline-block;
    }

    .dropcontent {
        display: none;
        position: absolute;
        width: 60px;
        margin: 3px;
    }

    .dropcontent a {
        text-decoration: none;
        background-color: burlywood;
        padding: 0px 20px 0px 5px;
        margin-left: 20px;
    }

    .drop:hover .dropcontent {
        display: block;
    }

    .drop a:hover {
        color: white;
        background-color: black;
        border-radius: 5px;
    }

 .btn:hover {
        color: white;
        background-color: black;
        border-radius: 5px;
    }
</style>

<body>


    <div class="nav">
        <div class="logo">
            <img src=".\images/vivek3.png" alt="loading image">
        </div>
        <div class="content">

            <div class="drop">
                <button class="btn"> FACULTY</button>
                <div class="dropcontent">
                    <a href="viewfaculty.php">View</a>
                    <a href="cvdetails.php">CV_Details</a>
                    <a href="addfaculty.php">Add</a>
                    <a href="editfaculty.php">Update</a>
                    <a href="delfaculty.php">Remove</a>
                </div>
            </div>

            <div class="drop">
                <button class="btn">STUDENT</button>
                <div class="dropcontent">
                    <a href="viewstudent.php">View</a>
                    <a href="addstudent.php">Add</a>
                    <a href="editstudent.php">Update</a>
                    <a href="delstudent.php">Remove</a>
                </div>
            </div>


            <div class="drop">
                <button class="btn"> VIDEOS</button>
                <div class="dropcontent">
                    <a href="addvideo9.php">Add</a>
                    <a href="delvideo9.php">Remove</a>
                </div>
            </div>
            <li style="margin-left:20px;"><a href="index.php"> &nbspHOME&nbsp</li></a>
            <li style="margin-left:20px;"><a href="contactus.php">&nbspCONTACT US&nbsp</li></a>
            <li style="margin-left:20px;"><a href="about.php">&nbsp ABOUT US&nbsp</li></a>
        </div>

    </div>



</body>

</html>
<?php

