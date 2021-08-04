<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Random Name Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2021">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="launchPage/css/randomNameText.css"/> 
	
	<script type="text/javascript" src="launchPage/js/nameMenu.js"></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="launchPage/images/title.png" alt="Random Name Generator" class="image" /></h1>
		
				
			
		
                                
		<br/>
			<br/>
                
                  <P>The Random Name Generator is an RPG tool designed to generate lists of randomly generated names, providing Game Masters with the means of producing lists of names for random NPCs, townsfolk, villagers, rank-and-file foot soldiers, etc., their Players may encounter during the game session.  These names are from real world examples based on different nations and ethnic groups; the given names are from 50 distinct countries/ethnic groups and the surnames from 38 distinct groups.  The data used by the Random Name Generator comes from <a href="http://www.familyeducation.com/" target="_blank" class="text_link"><span class="bold">familyeducation.com</span></a>, a new family resource website containing valuable information on family planning and the origins of baby names. </P>
			


               
                  <br/>
            <br/>
				<h3><img src="launchPage/images/title3.png" alt=" Random Name Generator" class="image" /></h3>
            

            
		<form action="" id ="nameGenForm"  target="_blank" method="post">
    
    <div class="content11">

		<div id="hideNames">


			<span class="formIputDescriptionRandomName">Given Name:</span>	
			<select id="givenName" name="theGivenName" class="randomNameBox">
			<option value="100"selected>Random</option>	
			<option value="0">African</option>
			<option value="1">African American</option>
			<option value="2">American</option>
			<option value="3">Arabic</option>
			<option value="4">Armenian</option>
			<option value="5">Celtic</option>
			<option value="6">Chinese</option>
			<option value="7">Czechoslovakian</option>
			<option value="8">Danish</option>
			<option value="9">Dutch</option>
			<option value="10">Egyptian</option>
			<option value="11">English</option>
			<option value="12">Finnish</option>
			<option value="13">French</option>
			<option value="14">Gaelic</option>
			<option value="15">German</option>
			<option value="16">Greek</option>
			<option value="17">Hawaiian</option>
			<option value="18">Hebrew</option>
			<option value="19">Hindi</option>
			<option value="20">Hungarian</option>
			<option value="21">Indian</option>
			<option value="22">Irish</option>
			<option value="23">Italian</option>
			<option value="24" >Japanese</option>
			<option value="25">Korean</option>
			<option value="26">Latin</option>
			<option value="27">Middle English</option>
			<option value="28">Native American</option>
			<option value="29">Norse</option>
			<option value="30">Old English</option>
			<option value="31">Old French</option>
			<option value="32">Old German</option>
			<option value="33">Old Norse</option>
			<option value="34">Persian</option>
			<option value="35">Polish</option>
			<option value="36">Polynesian</option>
			<option value="37">Russian</option>
			<option value="38">Sanskrit</option>
			<option value="39">Scandinavian</option>
			<option value="40">Scottish</option>
			<option value="41">Slavic</option>
			<option value="42">Spanish</option>
			<option value="43">Swahili</option>
			<option value="44">Swedish</option>
			<option value="45">Teutonic</option>
			<option value="46">Turkish</option>
			<option value="47">Vietnamese</option>
			<option value="48">Welsh</option>
			<option value="49">Yiddish</option>
			</select>


						
		<br/>
			<br/>

		

			<span class="formIputDescriptionRandomName">Surname:</span>	
			<select id="surname" name="theSurname" class="randomNameBox">	
			<option value="100">Random</option>	
			<option value="0">African</option>
			<option value="1">Arabic</option>
			<option value="2">Armenian</option>
			<option value="3">Catalan</option>
			<option value="4">Chinese</option>
			<option value="5">Cornish</option>
			<option value="6">Czechoslovakian</option>
			<option value="7">Danish</option>
			<option value="8">Dutch</option>
			<option value="9">English</option>
			<option value="10">Finnish</option>
			<option value="11">French</option>
			<option value="12">Galician</option>
			<option value="13">German</option>
			<option value="14">Greek</option>
			<option value="15">Hungarian</option>
			<option value="16">Indian</option>
			<option value="17">Irish</option>
			<option value="18">Italian</option>
			<option value="19" >Japanese</option>
			<option value="20">Jewish</option>
			<option value="21">Korean</option>
			<option value="22">Lithuanian</option>
			<option value="23">Muslim</option>
			<option value="24">Norwegian</option>
			<option value="25">Polish</option>
			<option value="26">Portuguese</option>
			<option value="27">Russian</option>
			<option value="28">Scandinavian</option>
			<option value="29" selected>Scottish</option>
			<option value="30">Slavic</option>
			<option value="31">Spanish</option>
			<option value="32">Swedish</option>
			<option value="33">Swiss</option>
			<option value="34">Turkish</option>
			<option value="35">Ukranian</option>
			<option value="36">Vietnamese</option>
			<option value="37">Welsh</option>
			</select>


		<br/>
			<br/>

</div>

		

			
			<span class="formIputDescriptionRandomName">Gender:</span>	
			<select id="gender" name="theGender" class="randomNameBox">	
			<option value="0">Male</option>
			<option value="1" selected>Female</option>
			</select>

		
		<br/>
			<br/>

						
			<span class="formIputDescriptionRandomName">Names Displayed:</span>	
			<select id="namesDisplayed" name="theNamesDisplayed" class="randomNameBox">	
			<option value="10">10</option>
			<option value="15">15</option>	
			<option value="20">20</option>
			<option value="30">30</option>	
			<option value="50" selected>50</option>
			<option value="100">100</option>
			<option value="200">200</option>
			</select>

			<br/>
			<br/>

                  
        <div class="randomGenNameCheckBox">
           <span class="footnote3"><input type="checkbox" id="totallyRandomName" value="1" name="theTotallyRandomName"  onClick="hideCharacterName()">Totally Random Names</span>
        </div>


        
        <br/>
        <br/>


	</div>
                

            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_randomName"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generatorName"  onClick="unhideCharacterName()"/>
		
				</span>
                
			
			</div>
		</div>
				
            <br/>
            <br/>
            
            
            </form>

    
                
                	
                <script>
        
                    
                    $("#generate_randomName").click(function(){
         
    
                   $("#nameGenForm").attr('action', "randomName/nameGenerator.php");

                     });


     
                    
                </script>
        
                
    
                
    </section>


</body>
</html>