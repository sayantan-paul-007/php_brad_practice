   <!-- // Sessions are advanced version of cookies as it stores info and make it accessible to multiple pages and it is stored in server. 
    // It is mainly used in login form to store input from user to server and then access again   -->
<?php 
session_start();
if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if($username == 'Sayantan' && $password == 'password'){
        $_SESSION['username']= $username;
        header('Location: /php_brad/new/dashboard.php');
    }
    else{
    echo 'Login failed';
}
    }
    
?>
<!-- This is for security purpose as if we input any code it gets passed on
This is an injection attack -->
<!-- htmlspecialchars - prevent the execution of any sort of html code -->
<form action="" method="POST">
<label for="username">UserName</label><br>
<input type="text" name="username"><br>
<label for="password">Password</label><br>
<input type="password" name="password"><br>
<input type="submit" value="Submit" name="submit">
</form>