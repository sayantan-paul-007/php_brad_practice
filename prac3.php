<?php 
//  $x = [23,54,233,159,189];
//  echo $x[3];
//  $rainbow =[
//     1 => 'violet',
//     2 => 'indigo', 
//     3 => 'blue',
//     4 => 'green',
//     5 => 'yellow',
//     6 => 'orange',
//     7 => 'red'
//  ];
//     echo $rainbow[3];
// $hex_data=[
//     'red'=>'#ff0000',
//     'green'=>'#00ff00',
//     'blue' => '#0000ff',
// ];
// echo $hex_data['blue'];
// $person = [
//     'first_name' => 'Sayantan',
//     'last_name' => 'Paul',
//     'age' => 21,
//     'email' => 'sayantanpaul@gmail.com'
// ];
// print_r($person['first_name']);
// Multi dimensional array: Array in an array
$employee = [
    [
        'first_name' => 'Sayantan',
        'last_name' => 'Paul',
        'age' => 21,
        'email' => 'sayantanpaul@gmail.com'
    ],
    [
        'first_name' => 'Sumit',
        'last_name' => 'Harijan',
        'age' => 21,
        'email' => 'sumit@gmail.com'
    ],
    [
        'first_name' => 'Nilesh',
        'last_name' => 'Yadav',
        'age' => 24,
        'email' => 'nilesh@gmail.com'
    ]
];
// echo $employee[1]['first_name'];
var_dump(json_encode($employee));
?> 