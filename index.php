<?php 

// indexed array

// they are called indexed arrays because when 
// we want to access it we use the array index they have
$peopleOne = ['shaun', 'crystal', 'ryu'];
//echo $peopleOne[1];


$peopleTwo = array('Adam', 'Luke', 'Darek');
//echo $peopleTwo[2];

$ages = [20, 30, 40, 50];
//print_r($ages)

$ages[1] = 25;
//print_r($ages);

$ages[] = 60;
//print_r($ages);
array_push($ages, 70);
// print_r ($ages);

//echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);


// associative array (key => value)

$ninjasOne = ['shaun' => 'crystal' , 'ryu' => 'luke' , 'adam' => 'darek'];
//echo $ninjasOne['shaun'];
//print_r($ninjasOne);

$ninjaTwo = array( 'ryu' => 'luke' , 'adam' => 'darek');
//print_r($ninjaTwo);

$ninjaThree = array_merge($ninjasOne, $ninjaTwo);
//print_r($ninjaThree);




// multi-dimentional arrays
$blogs = [
    ['title','James' , 'lorem', 30],
    ['How to practice JavaSript', 'Jemmy', 'lorem', 102],
    ['zelda hidden chests','Luke' , 'lorem', 1052],
];

//print_r($blogs[2][1]);

$blog = [
    ['title' => 'hello World', 'auther' => 'James' , 'content' => 'lorem', 'likes' => 30],
    ['title' => 'How to practice JavaSript', 'auther' => 'Jemmy', 'content' => 'lorem', 'likes' => 102],
    ['title' => 'zelda hidden chests', 'auther' => 'Luke' , 'content' => 'lorem', 'likes' => 1052],
];
//echo $blog[2]['auther'];
//echo count ($blog);

$blog[] = [ 'title' => 'How to manage a PR company', 'auther' => 'Darek' , 'content' => 'lorem', 'likes' => 1052];
//print_r($blog);

array_pop($blog);
print_r($blog);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>my first PHP file</title>
</head>
<body>

</body>
</html> 