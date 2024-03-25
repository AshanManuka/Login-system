<?php
    include_once 'header.php'
?>

    <div class="form">
        <h1>Register Here</h1>
        </br></br>
    <form action="includes/signup.inc.php" method="post">
        
        <input type="text" id="name" name="name" placeholder=" Full Name">
        <input type="text" id="email" name="email" placeholder=" Email">
        <input type="text" id="mobile" name="mobile" placeholder=" Mobile">
        <input type="text" id="username" name="username" placeholder=" Username">
        <input type="password" id="password" name="password" placeholder=" Password">
        <input type="password" id="repeat" name="repeat" placeholder=" Repeate Password">
        
        <Button type="submit" name="submit">Sign-Up</Button>
    </form>
    <p>Already have an Account, <a href="login.php">Login</a></p>
    </div>


<?php
 include_once 'footer.php'
?>