<?php 
include_once 'header.php';
?>

<h1>Manage Your Books</h1>
</br>

<div class="bookDiv">
<form action="includes/book.inc.php" method="get">
<input type="text" class="bookField" name="booksearchname" placeholder=" book name or about the book">
<button class="bookHomeBtn" name="find">Find Book</button>
</form>
</div>

<div class="subBookDiv">

<form action="includes/book.inc.php" method="post">
<input type="text" class="bookField" name="bookname" placeholder=" book name">
<input type="text" class="bookField" name="bookdescription" placeholder=" description">
<input type="text" class="bookField" name="bookauthor" placeholder=" author">
<input type="text" class="bookField" name="bookowner" placeholder=" owner's name">

<Button type="submit" name="submit">Save</Button>
<!-- <Button type="update" name="update">Update</Button> -->
</form>



</div>


<?php
include_once 'footer.php';
?>