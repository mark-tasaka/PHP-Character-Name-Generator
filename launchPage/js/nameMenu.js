
var hidden = false;

function hideCharacterName()               
 {    

    if ($('#totallyRandomName').is(":checked"))
    {
      $('#hideNames').hide();
      hidden = true;
    }
    else
    {
      $('#hideNames').show();
      hidden = false;
    }


}

function unhideCharacterName()               
 {
   if(hidden == true)
   {
    $('#hideNames').show();

   }
}
