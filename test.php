<?php 

//$country = [ 'Japan', 'United States', 'Canada'];

// echo count($country);

$person = ['name' => 'Ali', 'number' => 1234455];

// foreach ($person as $persons){
//     echo $persons;
// }


//echo $person['name'] = 'Mohamed';

// $person_push['Bio' => 'hasdjfkhsa'];
//array_push($person, 'Bio' => 'hasdjfkhsa');
//$person['Bio'] = 'hasdjfkhsa';
//print_r($person);

$peoples = [
    ['name' => 'Adam', 'number' => 1234455],
    ['name' => 'Jacob', 'number' => 1234455],
    ['name' => 'Amina', 'number' => 1234455]
];
// echo $people[1]['name'];
//array_push( $peoples, 'name' => 'Ali', 'number' => 1234455]);
// print_r($peoples);
foreach ($peoples as $people) {
    print_r($people['name']);
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <p><?php echo $person['name']; ?> </p>
    <p><?php echo $person['number']; ?> </p>
</body>
</html>

<?php 
// $grades = array("Jim"=>"A+", "Pam"=>"A-", "Oscar"=>"C+");
// $grades["Jim"] = "F";
// $grades["Ryan"] = "B+";
// $grades["Michel"] = "B-";
// print_r($grades);

?>