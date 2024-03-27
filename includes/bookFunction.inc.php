<?php

function emptyFields($bookName,$bookDescription,$bookAuthor){
    if(empty($bookName) || empty($bookDescription) || empty($bookAuthor)){
        return true;
    }else{
        return false;
    }
}


function saveBookDetails($conn,$bookName,$bookDescription,$bookAuthor,$userId){
    $sql = "INSERT INTO book(bookname,bookdescription,bookauthor,userid) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(! mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../book.php?error=stmtError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss",$bookName,$bookDescription,$bookAuthor,$userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../book.php?error=SavedBook");

}