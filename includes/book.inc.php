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

if(isset($_GET["find"])){
    $keyword = $_GET["booksearchname"];

    require_once 'dbh.inc.php';
    require_once 'bookFunction.inc.php';

    if(empty($keyword)){
        header("Location: ../book.php?error=EmptyField");
        exit();  
    }

    $searchResulr = searchBook($conn,$keyword);

    if($searchResulr) {
        echo "<h2>Search Results</h2>";
        echo "<div class='searchResults'>";
        foreach ($searchResulr as $book) {
            echo "<h2>" . $book['bookId'] ." | ". $book['bookName'] . " | " . $book['bookDescription'] . " | " . $book['bookAuthor'] . " | " . "</h2>";
        }
        echo "</div>";
    } else {
        echo "<p>No results found.</p>";
    }
    
    
}