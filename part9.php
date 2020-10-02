<?php

    ini_set('display_errors',1);

    //Variables
    $firstName = "Jane";
    $lastName = "Doe";
    $age = 35;
    $married = true;
    $childrenNames = array("Alice","Bod");


    //Operators
    $fullName = $firstName . " " . $lastName;
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;


    //Functions
    function getFullName($firstName,$lastName){
        return $firstName . " " . $lastName;
    }

    $fullName = getFullName($firstName,$lastName);
    $fullName = getFullName("Alice","Doe");

    function getIsSettled($age,$married){
        $dogYears = $age/7;
        $isAdult = $dogYears > 4;
        $isSettled = $isAdult and $married;
        return $isSettled;
    }

    $isSettled = getIsSettled($age,$married);
    $isSettled = getIsSettled(5,false);

    echo $fullName;
    echo "<h1>Hello World</h1>";

    if ($isSettled){
        echo $fullName . " is settled.";
    } else {
        echo $fullName . " is not settled";
    }

    foreach($childrenNames as $childName){
        echo "<li>" . $childName . "</li>";
    }


?>