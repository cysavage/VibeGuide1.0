<?php 
include_once 'header.php';
?>
<div class="body-image">
    <section class="signup-form">
        
        <form action ="includes/login.inc.php" method="post">
			<table>
				<tr><td><h1>Log In</h1></tr></td>
				<tr><td><input type="text" name="userid" placeholder="Username/E-mail"></td></tr>
				<tr><td><input type="password" name="pass" placeholder="Password"></td></tr>
				<tr><td><button type="submit" name="submit">Log in</button></td></tr>
			</table>
        </form>
    </section>


<?php 
include_once 'footer.php';
?>