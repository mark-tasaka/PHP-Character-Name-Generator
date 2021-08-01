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
            else if($backgroundGiven === 18)
            {
                $firstName = hebrewGivenNamesMale();
            }
            else if($backgroundGiven === 19)
            {
                $firstName = hindiGivenNamesMale();
            }
            else if($backgroundGiven === 20)
            {
                $firstName = hungarianGivenNamesMale();
            }
            else if($backgroundGiven === 21)
            {
                $firstName = indianGivenNamesMale();
            }
            else if($backgroundGiven === 22)
            {
                $firstName = irishGivenNamesMale();
            }
            else if($backgroundGiven === 23)
            {
                $firstName = italianGivenNamesMale();
            }
            else if($backgroundGiven === 24)
            {
                $firstName = japaneseGivenNamesMale();
            }
            else if($backgroundGiven === 25)
            {
                $firstName = koreanGivenNamesMale();
            }
            else if($backgroundGiven === 26)
            {
                $firstName = latinGivenNamesMale();
            }
            else if($backgroundGiven === 27)
            {
                $firstName = middleEnglishGivenNamesMale();
            }
            else if($backgroundGiven === 28)
            {
                $firstName = nativeAmericanGivenNamesMale();
            }
            else if($backgroundGiven === 29)
            {
                $firstName = norseGivenNamesMale();
            }
            else if($backgroundGiven === 30)
            {
                $firstName = oldEnglishGivenNamesMale();
            }
            else if($backgroundGiven === 31)
            {
                $firstName = oldFrenchGivenNamesMale();
            }
            else if($backgroundGiven === 32)
            {
                $firstName = oldGermanGivenNamesMale();
            }
            else if($backgroundGiven === 33)
            {
                $firstName = oldNorseGivenNamesMale();
            }
            else if($backgroundGiven === 34)
            {
                $firstName = persianGivenNamesMale();
            }
            else if($backgroundGiven === 35)
            {
                $firstName = polishGivenNamesMale();
            }
            else if($backgroundGiven === 36)
            {
                $firstName = polynesianGivenNamesMale();
            }
            else if($backgroundGiven === 37)
            {
                $firstName = russianGivenNamesMale();
            }
            else if($backgroundGiven === 38)
            {
                $firstName = sanskritGivenNamesMale();
            }
            else if($backgroundGiven === 39)
            {
                $firstName = scandinavianGivenNamesMale();
            }
            else if($backgroundGiven === 40)
            {
                $firstName = scottishGivenNamesMale();
            }
            else if($backgroundGiven === 41)
            {
                $firstName = slavicGivenNamesMale();
            }
            else if($backgroundGiven === 42)
            {
                $firstName = spanishGivenNamesMale();
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
            else if($backgroundGiven === 18)
            {
                $firstName = hebrewGivenNamesFemale();
            }
            else if($backgroundGiven === 19)
            {
                $firstName = hindiGivenNamesFemale();
            }
            else if($backgroundGiven === 20)
            {
                $firstName = hungarianGivenNamesFemale();
            }
            else if($backgroundGiven === 21)
            {
                $firstName = indianGivenNamesFemale();
            }
            else if($backgroundGiven === 22)
            {
                $firstName = irishGivenNamesFemale();
            }
            else if($backgroundGiven === 23)
            {
                $firstName = italianGivenNamesFemale();
            }
            else if($backgroundGiven === 24)
            {
                $firstName = japaneseGivenNamesFemale();
            }
            else if($backgroundGiven === 25)
            {
                $firstName = koreanGivenNamesFemale();
            }
            else if($backgroundGiven === 26)
            {
                $firstName = latinGivenNamesFemale();
            }
            else if($backgroundGiven === 27)
            {
                $firstName = middleEnglishGivenNamesFemale();
            }
            else if($backgroundGiven === 28)
            {
                $firstName = nativeAmericanGivenNamesFemale();
            }
            else if($backgroundGiven === 29)
            {
                $firstName = norseGivenNamesFemale();
            }
            else if($backgroundGiven === 30)
            {
                $firstName = oldEnglishGivenNamesFemale();
            }
            else if($backgroundGiven === 31)
            {
                $firstName = oldFrenchGivenNamesFemale();
            }
            else if($backgroundGiven === 32)
            {
                $firstName = oldGermanGivenNamesFemale();
            }
            else if($backgroundGiven === 33)
            {
                $firstName = oldNorseGivenNamesFemale();
            }
            else if($backgroundGiven === 34)
            {
                $firstName = persianGivenNamesFemale();
            }
            else if($backgroundGiven === 35)
            {
                $firstName = polishGivenNamesFemale();
            }
            else if($backgroundGiven === 36)
            {
                $firstName = polynesianGivenNamesFemale();
            }
            else if($backgroundGiven === 37)
            {
                $firstName = russianGivenNamesFemale();
            }
            else if($backgroundGiven === 38)
            {
                $firstName = sanskritGivenNamesFemale();
            }
            else if($backgroundGiven === 39)
            {
                $firstName = scandinavianGivenNamesFemale();
            }
            else if($backgroundGiven === 40)
            {
                $firstName = scottishGivenNamesFemale();
            }
            else if($backgroundGiven === 41)
            {
                $firstName = slavicGivenNamesFemale();
            }
            else if($backgroundGiven === 42)
            {
                $firstName = spanishGivenNamesFemale();
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
        else if($backgroundSurname === 16)
        {
            $lastName = indianSurnames();
        }
        else if($backgroundSurname === 17)
        {
            $lastName = irishSurnames();
        }
        else if($backgroundSurname === 18)
        {
            $lastName = italianSurnames();
        }
        else if($backgroundSurname === 19)
        {
            $lastName = japaneseSurnames();
        }
        else if($backgroundSurname === 20)
        {
            $lastName = jewishSurnames();
        }
        else if($backgroundSurname === 21)
        {
            $lastName = koreanSurnames();
        }
        else if($backgroundSurname === 22)
        {
            $lastName = lithuanianSurnames();
        }
        else if($backgroundSurname === 23)
        {
            $lastName = muslimSurnames();
        }
        else if($backgroundSurname === 24)
        {
            $lastName = norwegianSurnames();
        }
        else if($backgroundSurname === 25)
        {
            $lastName = polishSurnames();
        }
        else if($backgroundSurname === 26)
        {
            $lastName = portugueseSurnames();
        }
        else if($backgroundSurname === 27)
        {
            $lastName = russianSurnames();
        }
        else if($backgroundSurname === 28)
        {
            $lastName = scandinavianSurnames();
        }
        else if($backgroundSurname === 29)
        {
            $lastName = scottishSurnames();
        }
        else if($backgroundSurname === 30)
        {
            $lastName = slavicSurnames();
        }
        else if($backgroundSurname === 31)
        {
            $lastName = spanishSurnames();
        }
        else if($backgroundSurname === 32)
        {
            $lastName = swedishSurnames();
        }
        else if($backgroundSurname === 33)
        {
            $lastName = swissSurnames();
        }
        else if($backgroundSurname === 34)
        {
            $lastName = turkishSurnames();
        }
        else if($backgroundSurname === 35)
        {
            $lastName = ukranianSurnames();
        }
        else if($backgroundSurname === 36)
        {
            $lastName = vietnameseSurnames();
        }
        else if($backgroundSurname === 37)
        {
            $lastName = welshSurnames();
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

        case 18:
            $firstName = "Hebrew";
            break;
  
        case 19:
            $firstName = "Hindi";
            break;

        case 20:
            $firstName = "Hungarian";
            break;

        case 21:
            $firstName = "Indian";
            break;
            
        case 22:
            $firstName = "Irish";
            break;
            
        case 23:
            $firstName = "Italian";
            break;
            
        case 24:
            $firstName = "Japanese";
            break;
            
        case 25:
            $firstName = "Korean";
            break;

        case 26:
            $firstName = "Latin";
            break;
             
        case 27:
            $firstName = "Middle English";
            break;
            
        case 28:
            $firstName = "Native American";
            break;
            
        case 29:
            $firstName = "Norse";
            break;
            
        case 30:
            $firstName = "Old English";
            break;
            
        case 31:
            $firstName = "Old French";
            break;
            
        case 32:
            $firstName = "Old German";
            break;
            
        case 33:
            $firstName = "Old Norse";
            break;
            
        case 34:
            $firstName = "Persian";
            break;
            
        case 35:
            $firstName = "Polish";
            break;
                        
        case 36:
            $firstName = "Polynesian";
            break;
            
        case 37:
            $firstName = "Russian";
            break;
            
        case 38:
            $firstName = "Sanskrit";
            break;
            
        case 39:
            $firstName = "Scandinavian";
            break;
            
        case 40:
            $firstName = "Scottish";
            break;
            
        case 41:
            $firstName = "Slavic";
            break;
            
        case 42:
            $firstName = "Spanish";
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
         
        case 16:
            $lastName = "Indian";
            break;
          
        case 17:
            $lastName = "Irish";
            break;

        case 18:
            $lastName = "Italian";
            break;

        case 19:
            $lastName = "Japanese";
            break;                   
                

        case 20:
            $lastName = "Jewish";
            break;      

        case 21:
            $lastName = "Korean";
            break;   

        case 22:
            $lastName = "Lithuanian";
            break;    

        case 23:
            $lastName = "Muslim";
            break;             
    
        case 24:
            $lastName = "Norwegian";
            break;          
    
        case 25:
            $lastName = "Polish";
            break;      
    
        case 26:
            $lastName = "Portuguese";
            break;    
            
        case 27:
            $lastName = "Russian";
            break;   
            
        case 28:
            $lastName = "Scandinavian";
            break;   
            
        case 29:
            $lastName = "Scottish";
            break;   
            
        case 30:
            $lastName = "Slavic";
            break;   
            
        case 31:
            $lastName = "Spanish";
            break;   
            
        case 32:
            $lastName = "Swedish";
            break;   
            
        case 33:
            $lastName = "Swiss";
            break;   
            
        case 34:
            $lastName = "Turkish";
            break;   
            
        case 35:
            $lastName = "Ukranian";
            break;   
            
        case 36:
            $lastName = "Vietnamese";
            break;   
            
        case 37:
            $lastName = "Welsh";
            break;   
                                                        
        default:
        $lastName = "99999999";

    }

    return 'Given Name: ' . $firstName . $theGender . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last Name: ' . $lastName;
    

}




?>