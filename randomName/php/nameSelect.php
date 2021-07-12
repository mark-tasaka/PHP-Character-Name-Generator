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
            else if($backgroundGiven === 3)
            {
                $firstName = arabicGivenNamesMale();
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
            else if($backgroundGiven === 3)
            {
                $firstName = arabicGivenNamesFemale();
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
        else if($backgroundSurname === 1)
        {
            $lastName = arabicSurnames();
        }
        else if($backgroundSurname === 2)
        {
            $lastName = armenianSurnames();
        }
        else if($backgroundSurname === 3)
        {
            $lastName = catalanSurnames();
        }
        else if($backgroundSurname === 4)
        {
            $lastName = chineseSurnames();
        }
        else if($backgroundSurname === 5)
        {
            $lastName = cornishSurnames();
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

function getNameDescript($originGiven, $originSurname, $sex)
{
    $backgroundGiven = intval($originGiven);
    $backgroundSurname = intval($originSurname);
    $gender = intval($sex);

    if($gender === 0)
    {
        $theGender = " (Male) ";
    }
    else
    {
        $theGender = " (Female)";
    }

    $firstName = "";
    $lastName = "";

    switch($backgroundGiven)
    {
        case 0:
        $firstName = "African";
        break;
        
        case 1:
        $firstName = "African-American";
        break;
        
        case 2:
        $firstName = "American";
        break;
        
        case 3:
        $firstName = "Arabic";
        break;
        
        case 4:
        $lastName = "Chinese";
        break;

        case 5:
        $lastName = "Cornish";
        break;

        default:
        $firstName = "99999999";

    }
    

    switch($backgroundSurname)
    {
        case 0:
        $lastName = "African";
        break;

        case 1:
        $lastName = "Arabic";
        break;

        case 2:
        $lastName = "Armenian";
        break;

        case 3:
        $lastName = "Catalan";
        break;
        
        case 4:
        $lastName = "Chinese";
        break;

        case 5:
        $lastName = "Cornish";
        break;

        default:
        $lastName = "99999999";

    }

    return 'Given Name: ' . $firstName . $theGender . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last Name: ' . $lastName;
    

}




?>