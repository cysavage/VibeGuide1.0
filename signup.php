<?php 
include_once 'header.php';
?>
<div class="body-image2">
    <section class="signup-form">
        <form action ="includes/signup.inc.php" method="post">
		
		<table>
				<tr><td><h1>Create An Account</h1></tr></td>
				<tr><td><input type="text" name="firstname" placeholder="First Name"></td></tr>
				<tr><td><input type="text" name="lastname" placeholder="Last Name"></td></tr>
				<tr><td><input type="text" name="email" placeholder="E-mail"></td></tr>
            <!-- Birthday Drop Down
  
            <label >birthday : </label>           
            <SELECT id ="year" name = "yyyy" placeholder="Year" onchange="change_year(this)"></SELECT>
            <SELECT  id ="month" name = "mm" placeholder="Month" onchange="change_month(this)"></SELECT>
            <SELECT id ="day" name = "dd" placeholder="Day"></SELECT>
            <br>
            
            -->
				<tr><td><input type="text" name="userid" placeholder="Username"></td></tr>
				<tr><td><input type="password" name="password" placeholder="Password"></td></tr>
				<tr><td><input type="password" name="passrepeat" placeholder="Confirm Password"></td></tr>
				<tr><td><button type="submit" name="submit">Sign up</button>
		</table>
		
        </form>
        
		
    </section>

<?php 
include_once 'footer.php';
?>
