<?php 
    if(isset($_POST['submit'])){
    $allowed_entry = array('png', 'jpg', 'jpeg', 'gif');
        if(!empty($_FILES['upload']['name'])){
            // print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target = "uploads/$file_name";
            $file_extend = explode('.', $file_name);
            $file_extend = strtolower(end($file_extend));
            if(in_array($file_extend, $allowed_entry)){
                if($file_size <= 15000){
                    move_uploaded_file($file_tmp,$target);
                    $message = '<p style="color:green;">File uploaded successfully</p>';   
                }
                else{
                    $message =  '<p style="color:pink;">Please upload a file less than 1 MB</p>';
                }
            }
            else{
               $message = '<p style="color:pink;">Invalid file</p>';
            }

        }
        else{
            $message = '<p style="color:pink;">Please upload a file</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="" method="POST" enctype="multipart/form-data" >
    <!-- enctype="multipart/form-data" - is important for file uploading -->
    Upload an image <br>
    <input type="file" name="upload"><br>
    <input type="submit" value="Submit" name="submit"><br>
</form>
</body>
</html>