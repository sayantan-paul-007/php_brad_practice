<?php 
if(isset($_POST['submit'])){
    $a = $_POST['name'];
    $b = $_POST['age'];
    }
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<label for="name">Name</label><br>
<input type="text" name="name"><br>
<label for="age">Age</label><br>
<input type="text" name="age"><br>
<input type="submit" value="Submit" name="submit">
</form>
<?php 
        echo 'Name: '. $a .'<br>' . 'Age: ' . $b;
?>
