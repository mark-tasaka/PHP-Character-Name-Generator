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


$nameGenerated = array();
$nameGenerated = getName($numberNames);

?>



<img id="title"/>

   
<span id="nameBlock">
<?php

foreach($nameGenerated as $name)
{
    echo $name . '<br/><br/>';
}


?>
</span>
           


<script>
      
      
  let imgData = "images/title.png";
     
       $("#title").attr("src", imgData);
     

 </script>

</body>
</html>