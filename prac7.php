<?php 
//     $names = ['Yash', 'Paresh', 'Smitesh', 'Manish', 'Surya'];
// // // count() - Array Length
// // echo count($names);
// // search array
// // echo var_dump(in_array('Suryas', $names));
// // Add to array
// // Same as array push
// // $names[]='Avinash';
// // print_r($names);
// // array_push($names, 'Abhishek','Pratik', 'Subhas', 'Pritesh');
// array_unshift($names,'Yuvraj', 'Saurav','Rahul');
// // Removing elements
// // end
// // array_pop($names);
// // // start
// // array_shift($names);
// // // Delete random element
// // unset($names[3]);
// // divides array into chunks and second parameter is no. of elements
// $chunk = array_chunk($names,3);
// print_r($names);
// print_r($chunk);
// $arr1=[23,23,65];
// $arr2=[3,5,56];
// $arr3 = array_merge($arr1,$arr2);
// $arr4 = [...$arr1,...$arr2, ...$arr3];
// print_r($arr3) ;
// print_r($arr4) ;
$roll = [1,2,3,4,5,6,7];
$name = ['Yogesh','Hitesh','Kunal','Piyush','Sairaj','Komal','Minal'];
$mix = array_combine($roll,$name);
// print_r($mix); 
// print_r($keys = array_keys($mix));
// print_r($flip=array_flip($mix));
$numb_range = range(1,30);
// print_r($numb_range);
$num_new = array_map(fn($numb_ranger)=> "Number $numb_ranger",$numb_range);
// print_r($numb_range);
$num_filter = array_filter($numb_range, fn($numb_ranger)=> $numb_ranger % 65 ==25);
// print_r($num_filter);
$num_reduce = array_reduce($numb_range,fn($carry,$numb_ranger) => $carry + $numb_ranger);
echo $num_reduce;
?>