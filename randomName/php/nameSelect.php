<?php

include 'givenNamesMale.php';
include 'surnames.php';


function getName($select)
{
    $number = intval($select);
    $nameGroup = array();

    for($i = 0; $i < $number; ++$i)
    {
        $firstName = africanGivenNamesMale();
        $lastName = africanSurnames();

        $fullName = $firstName . ' ' . $lastName;
        array_push($nameGroup, $fullName);

    }

    return $nameGroup;

}




?>