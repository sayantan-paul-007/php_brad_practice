<?php 

    // for($i=0; $i< 20; $i++){
    //     echo $i , '<br>';
    // }
    // $i=0;
    // // while($i<=30){
    //     echo $i, '<br>';
    //     $i++;
    // }
    // do{
    //     echo $i, '<br>';
    //     $i++;
    // }while($i<=25);
    $ages = [12,43,23,56,32,24,26,33,53];
    //  for($i=0; $i < count($ages); $i++){
    //     echo $ages[$i], '<br>';
    // //  }
    // foreach($ages as $i  => $age){
    //     echo $i+1 . '-', $age, '<br>';
    // }
    $biodata = [
        'fname' => 'Sayantan',
        'lname' => 'Paul',
        'age' => 21,
        'email' => 'sayantan@email.com',
        'phone' => 9842944545  
    ];
    foreach($biodata as $detail =>  $bio){
        echo "$detail - $bio <br>";
    }
?>