<?php 
// if(isset($_POST['submit'])){
//     $a = htmlspecialchars($_POST['name']) ;
//     $b = htmlspecialchars($_POST['age']);
//     echo 'Name: '. $a .'<br>' . 'Age: ' . $b;
//     }
    
?>
<!-- This is for security purpose as if we input any code it gets passed on
This is an injection attack -->
<!-- htmlspecialchars - prevent the execution of any sort of html code -->
<!-- <form action="<?php // echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label for="name">Name</label><br>
<input type="text" name="name"><br>
<label for="age">Age</label><br>
<input type="text" name="age"><br>
<input type="submit" value="Submit" name="submit">
</form> -->


<!-- This is for security purpose as if we input any code it gets passed on
This is an injection attack -->
<!-- filter_input  -->
<?php 
if(isset($_POST['submit'])){
    $a = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $b = filter_input(INPUT_POST, 'age',FILTER_SANITIZE_SPECIAL_CHARS);
    echo 'Name: '. $a .'<br>' . 'Age: ' . $b;
    }
    
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label for="name">Name</label><br>
<input type="text" name="name"><br>
<label for="age">Age</label><br>
<input type="text" name="age"><br>
<input type="submit" value="Submit" name="submit">
</form>
