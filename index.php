<?php
//echo'<p>This is PHP!</p>';

if(isset($_GET["First Name"])){//show feedback
 echo $_GET["First name"];
}else{//show form
 echo '   
 <form="">
 First Name <inout type="text" name="FirstName" />
 <br / .
 <input type="submit">
 
</form> 
 ';
}



?>

