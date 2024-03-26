<?php
    include_once 'header.php'
?>
        <h1>Hello 
            <?php 
            if(isset($_SESSION["userFullName"])){
                echo $_SESSION["userFullName"];
            }
            ?>
        </h1>
        <h3>Welcome to the Comas Platform..!</h3>



<?php
    include_once 'footer.php'
?>