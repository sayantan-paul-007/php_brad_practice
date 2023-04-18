<?php 
    // Cookies are temporary info stored about the user who access the website
    setcookie('name','Sayantan',time()+ 86400 *30);
    setcookie('age',30,time()+ 86400 *30);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
    // setcookie(arg1,arg2,arg3) - sets the cookies
    // arg1 - the name of any data
    // arg2 - the value of the data
    // arg3 - expiry time 
?>