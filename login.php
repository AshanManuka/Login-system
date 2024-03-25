<?php
    include_once 'header.php'
?>

    <div class="form">
        <h1>Login Here</h1>
        </br></br>
    <form action="includes/login.inc.php" method="post">
        <label for="uname">Username</label>
        <input type="text" id="uname" name="username" placeholder=" email / mobile number">

        <label for="pword">Password</label>
        <input type="text" id="pword" name="password" placeholder="$35^dvs">

        
        <Button type="submit" name="submit">Login</Button>
    </form>

    <p>Don't have an Account, <a href="signup.php">Register</a></p>
    </div>


<?php
 include_once 'footer.php'
?>