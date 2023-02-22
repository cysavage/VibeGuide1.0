<?php 
include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Log in:</h2>
        <form action ="includes/login.inc.php" method="post">
          
            <input type="text" name="userid" placeholder="Username/E-mail"><br>
            <input type="password" name="pass" placeholder="Password"><br>
           
            <button type="submit" name="submit">Log in</button>
        </form>
        
    </section>


<?php 
include_once 'footer.php';
?>