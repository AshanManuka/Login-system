<?php

session_start();

if(isset($_POST["submit"])){
    $bookName = $_POST["bookname"];
    $bookDescription = $_POST["bookdescription"];
    $bookAuthor = $_POST["bookauthor"];
    $bookOwner = $_POST["bookowner"];

    require_once 'dbh.inc.php';
    require_once 'bookFunction.inc.php';

    if(emptyFields($bookName,$bookDescription,$bookAuthor) === true){
        header("Location: ../book.php?error=EmptyFields");
        exit();
    }

    if(empty($bookOwner) && isset($_SESSION["userFullName"])){
       $bookOwner = $_SESSION["userFullName"];
    }
    echo $bookOwner;

    saveBookDetails($conn,$bookName,$bookDescription,$bookAuthor,55);
}