<?php 
include_once 'header.php';
?>
    <section class="signup-form">
        <h2>Sign Up:</h2>
        <form action ="includes/signup.inc.php" method="post">
            <input type="text" name="firstname" placeholder="First Name"><br>
            <input type="text" name="lastname" placeholder="Last Name"><br>
            <input type="text" name="email" placeholder="E-mail"><br>
            <!-- Birthday Drop Down
  
            <label >birthday : </label>           
            <SELECT id ="year" name = "yyyy" placeholder="Year" onchange="change_year(this)"></SELECT>
            <SELECT  id ="month" name = "mm" placeholder="Month" onchange="change_month(this)"></SELECT>
            <SELECT id ="day" name = "dd" placeholder="Day"></SELECT>
            <br>
            
            -->
            <input type="text" name="userid" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="password" name="passrepeat" placeholder="Confirm Password"><br>
            <button type="submit" name="submit">Sign up</button>
        </form>
        
    </section>

<?php 
include_once 'footer.php';
?>
