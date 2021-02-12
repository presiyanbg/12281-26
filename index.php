<?php

$welcomeMsg = "Good Morning";
$age = 21;
$temp = 1.3;
$isTodayFriday = true;

$array = [
    $welcomeMsg,
    $age,
    $temp,
    $isTodayFriday
];

//print_r($array);
//print_r($array[0]);

$assocArray = [
    "welcome" => $welcomeMsg,
    "age" => $age,
    "temp" => $temp,
    "isTodayFriday" => $isTodayFriday
];

//print_r($assocArray);
//echo "<br>";
//echo $assocArray["temp"];

//for ($i = 0; $i < sizeOf($array); $i++) {
//    echo "<b>" . "<i>";
//    echo $array[$i];
//    echo "<br>";
//}

//$i = 0;
//while ($i < sizeof($array) ) {
//    echo $array[$i] . "<br>";
//    $i++;
//}

//foreach ($assocArray as $item) {
//    echo $item . "<br>";
//}

//foreach ($assocArray as $key => $item) {
//    echo $key . " / " . $item . "<br>";
//}

/*
Functions
*/

function findDogBreed($nameOfDog) {
    $dogs = [
        "husky" => "Kiara",
        "dog" => "Maxi",
        "bulldog" => "Rex",
        "shepard" => "Jaro",
    ];

    foreach ($dogs as $key => $dog) {
        if ($dog === $nameOfDog) {
            echo "<i>" . $nameOfDog . "</i>" . " is a <b>" . $key . "</b> <br>";
        }
    }
}

//findDogBreed("Kiara");

function advanceDogFinder9000 ($nameOfDog) {
//    if ($nameOfDog === "Kiara") {
//        echo "Dog is huskey";
//    } else if ($nameOfDog === "Rex") {
//        echo "Dog is shepard";
//    } else {
//        echo "Dog cant be found";
//    }

    switch ($nameOfDog) {
        case "Kiara" :
            echo "ku4e1";
            break;
        case "Rex" :
            echo "ku4e2";
            break;
        case "Sharo" :
            echo "ku4e3";
            break;
        case "Mike" :
            echo "ku4e4";
            break;
        default :
            echo "Dog not found!";
    }
}

advanceDogFinder9000("Kiara");

//echo $welcomeMsg;
//echo "<br>";
//echo $age;
//echo "<br>";
//echo $temp;
//echo "<br>";
//echo $isTodayFriday;