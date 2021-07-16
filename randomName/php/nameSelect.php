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
            else if($backgroundGiven === 4)
            {
                $firstName = armenianGivenNamesMale();
            }
            else if($backgroundGiven === 5)
            {
                $firstName = celticGivenNamesMale();
            }
            else if($backgroundGiven === 6)
            {
                $firstName = chineseGivenNamesMale();
            }
            else if($backgroundGiven === 7)
            {
                $firstName = czechGivenNamesMale();
            }
            else if($backgroundGiven === 8)
            {
                $firstName = danishGivenNamesMale();
            }
            else if($backgroundGiven === 9)
            {
                $firstName = dutchGivenNamesMale();
            }
            else if($backgroundGiven === 10)
            {
                $firstName = egyptianGivenNamesMale();
            }
            else if($backgroundGiven === 11)
            {
                $firstName = englishGivenNamesMale();
            }
            else if($backgroundGiven === 12)
            {
                $firstName = finnishGivenNamesMale();
            }
            else if($backgroundGiven === 13)
            {
                $firstName = frenchGivenNamesMale();
            }
            else if($backgroundGiven === 14)
            {
                $firstName = gaelicGivenNamesMale();
            }
            else if($backgroundGiven === 15)
            {
                $firstName = germanGivenNamesMale();
            }
            else if($backgroundGiven === 16)
            {
                $firstName = greekGivenNamesMale();
            }
            else if($backgroundGiven === 17)
            {
                $firstName = hawaiianGivenNamesMale();
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
            else if($backgroundGiven === 4)
            {
                $firstName = armenianGivenNamesFemale();
            }
            else if($backgroundGiven === 5)
            {
                $firstName = celticGivenNamesFemale();
            }
            else if($backgroundGiven === 6)
            {
                $firstName = chineseGivenNamesFemale();
            }
            else if($backgroundGiven === 7)
            {
                $firstName = czechGivenNamesFemale();
            }
            else if($backgroundGiven === 8)
            {
                $firstName = danishGivenNamesFemale();
            }
            else if($backgroundGiven === 9)
            {
                $firstName = dutchGivenNamesFemale();
            }
            else if($backgroundGiven === 10)
            {
                $firstName = egyptianGivenNamesFemale();
            }
            else if($backgroundGiven === 11)
            {
                $firstName = englishGivenNamesFemale();
            }
            else if($backgroundGiven === 12)
            {
                $firstName = finnishGivenNamesFemale();
            }
            else if($backgroundGiven === 13)
            {
                $firstName = frenchGivenNamesFemale();
            }
            else if($backgroundGiven === 14)
            {
                $firstName = gaelicGivenNamesFemale();
            }
            else if($backgroundGiven === 15)
            {
                $firstName = germanGivenNamesFemale();
            }
            else if($backgroundGiven === 16)
            {
                $firstName = greekGivenNamesFemale();
            }
            else if($backgroundGiven === 17)
            {
                $firstName = hawaiianGivenNamesFemale();
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
        else if($backgroundSurname === 6)
        {
            $lastName = czechSurnames();
        }
        else if($backgroundSurname === 7)
        {
            $lastName = danishSurnames();
        }
        else if($backgroundSurname === 8)
        {
            $lastName = dutchSurnames();
        }
        else if($backgroundSurname === 9)
        {
            $lastName = englishSurnames();
        }
        else if($backgroundSurname === 10)
        {
            $lastName = finnishSurnames();
        }
        else if($backgroundSurname === 11)
        {
            $lastName = frenchSurnames();
        }
        else if($backgroundSurname === 12)
        {
            $lastName = galicianSurnames();
        }
        else if($backgroundSurname === 13)
        {
            $lastName = germanSurnames();
        }
        else if($backgroundSurname === 14)
        {
            $lastName = greekSurnames();
        }
        else if($backgroundSurname === 15)
        {
            $lastName = hungarianSurnames();
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
        $firstName = "Armenian";
        break;
        
        case 5:
        $firstName = "Celtic";
        break;

        case 6:
        $firstName = "Chinese";
        break;

        case 7:
        $firstName = "Czechoslovakian";
        break;
        
        case 8:
        $firstName = "Danish";
        break;
        
        case 9:
            $firstName = "Dutch";
            break;
        
        case 10:
           $firstName = "Egyptian";
            break;

        case 11:
           $firstName = "English";
          break;

        case 12:
         $firstName = "Finnish";
        break;

        case 13:
         $firstName = "French";
        break;
        
        case 14:
            $firstName = "Gaelic";
           break;

        case 15:
        $firstName = "German";
        break;

        case 16:
            $firstName = "Greek";
            break;

        case 17:
            $firstName = "Hawaiian";
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

        case 6:
        $lastName = "Czechoslovakian";
        break;

        case 7:
        $lastName = "Danish";
        break;

        case 8:
        $lastName = "Dutch";
        break;

        case 9:
        $lastName = "English";
        break;

        case 10:
            $lastName = "Finnish";
            break;

        case 11:
            $lastName = "French";
            break;
        
        case 12:
            $lastName = "Galician";
            break;
         
        case 13:
            $lastName = "German";
            break;
         
        case 14:
            $lastName = "Greek";
            break;
         
        case 15:
            $lastName = "Hungarian";
                break;
           
        default:
        $lastName = "99999999";

    }

    return 'Given Name: ' . $firstName . $theGender . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last Name: ' . $lastName;
    

}




?>