<!DOCTYPE html>
<html>
<head>
<title>Name Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content=" Random Name Generator..">
	<meta name="keywords" content=",PHP,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../images/favicon/icon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/randomNameGen.css">
    
    
    
    
</head>
<body>

<?php

include 'php/nameSelect.php';


if(isset($_POST["theNamesDisplayed"]))
{
    $numberNames = $_POST["theNamesDisplayed"];

}


if(isset($_POST["theGivenName"]))
{
    $givenName = $_POST["theGivenName"];

}

if(isset($_POST["theSurname"]))
{
    $surname = $_POST["theSurname"];

}

if(isset($_POST["theGender"]))
{
    $gender = $_POST["theGender"];

}

$nameGenerated = array();
$nameGenerated = getName($numberNames, $givenName, $surname, $gender);

$nameGeneratedCol1 = array();
$nameGeneratedCol2 = array();

$nameCount = count($nameGenerated);

if($nameCount >= 20)
{
    $nameGeneratedCol1 = array_slice($nameGenerated, 0, ($nameCount/2));
    $nameGeneratedCol2 = array_slice($nameGenerated, ($nameCount/2));
}

$nameDescript = getNameDescript($givenName, $surname, $gender);


$lastName = array(

);

$lastName2 = array_unique($lastName);


?>



<img id="title"/>


<span id="nameInformation">
<?php
echo $nameDescript;

?>
</span>



<span id="nameBlock">
<?php
if($nameCount >= 20)
{
    foreach($nameGeneratedCol1 as $name)
    {
        echo $name . '<br/><br/>';
    }

}
else
{
    foreach($nameGenerated as $name)
    {
        echo $name . '<br/><br/>';
    }
}

/*
foreach($lastName2 as $name)
{
    echo "\"" . $name . "\", <br/>";
}
*/

?>

</span>
           
   
<span id="nameBlock2">
<?php

if($nameCount >= 20)
{
    foreach($nameGeneratedCol2 as $name)
    {
        echo $name . '<br/><br/>';
    }

}

?>
</span>
           

<script>
      
      
  let imgData = "images/title.png";
     
       $("#title").attr("src", imgData);
     

 </script>

</body>
</html>