<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comaa</title>

    <style>
        *{
            margin: 0;
        }

       ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #111;
        }

        input[type=text], input[type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        .bookDiv{
            width: 80%;
            margin-left: 10%;
            margin-top: 3%;
        }

        .subBookDiv{
            width: 60%;
            margin-left: 15%;
            margin-top: 3%;
        }


        button{
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        .bookHomeBtn{
        width: 24%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        .form{
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 6%;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        .error{
            color: red;
            border: 1px solid red;
            padding: 12px;
            font-size: 22px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="signup.php">Register</a></li>
  <li><a href="logout.php">LogOut</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="book.php">Books</a></li>
</ul>

<div class="container" style="margin:20px;">