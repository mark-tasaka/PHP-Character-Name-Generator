<?php

include 'givenNamesMale.php';
include 'surnames.php';
include 'givenNamesFemale.php';


function getName($select, $originGiven, $originSurname, $sex)
{
    $number = intval($select);
    $backgroundGiven = intval($originGiven);
    $backgroundSurname = intval($originSurname);
    $gender = intval($sex);
    $nameGroup = array();

    for($i = 0; $i < $number; ++$i)
    {
        if($gender === 0)
        {
            if($backgroundGiven === 0)
            {
                $firstName = africanGivenNamesMale();
            }
            else if($backgroundGiven === 1)
            {
                $firstName = africanAmericanGivenNamesMale();
            }
            else if($backgroundGiven === 2)
            {
                $firstName = americanGivenNamesMale();
            }
            else
            {
                $firstName = "9999999999";
            }

        }
        else
        {
            if($backgroundGiven === 0)
            {
                $firstName = africanGivenNamesFemale();
            }
            else if($backgroundGiven === 1)
            {
                $firstName = africanAmericanGivenNamesFemale();
            }
            else if($backgroundGiven === 2)
            {
                $firstName = americanGivenNamesFemale();
            }
            else
            {
                $firstName = "9999999999";
            }

        }
        

        if($backgroundSurname === 0)
        {
            $lastName = africanSurnames();
        }
        else
        {
            $lastName = "9999999999";
        }


        $fullName = $firstName . ' ' . $lastName;
        array_push($nameGroup, $fullName);

    }

    return $nameGroup;

}




?>