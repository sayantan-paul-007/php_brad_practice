<?php 


$file= 'new/user.txt';
if(file_exists($file)){
    // echo readfile($file); Read the contents of a file
    $handle = fopen($file,'r');
    $content = fread($handle,filesize($file));
    fclose($handle);
    echo $content;
}
else{
    $handle = fopen($file,'w');
    $content = 'Hello my name is Sayantan' . PHP_EOL . 'Hello my name is Prayag' . PHP_EOL . 'Hello my name is Suyash' . PHP_EOL . 'Hello my name is Karan';
    fwrite($handle, $content);
    fclose($handle);
}
?>
