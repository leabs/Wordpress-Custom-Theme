//jQuery(document).ready(function() {
	
	
	 jQuery('#ca-container').contentcarousel();//jquery for portfolio functionality
	 jQuery('.siteInfo').jqte(); //jquery for texteditor for on text area
	 jQuery( "#tabs" ).tabs();// jquery to display tabs in backend		
	

jQuery("#input_form").keyup(function(){	
var inputVal = new Array();
var i =0;

	//var myClass = jQuery(this).attr("class");

	jQuery("#input_form input[type=text]").each(function() {
         inputVal[i] = jQuery.trim(jQuery(this).val());
         i++;
         });
   
    inputVal[i] = jQuery(".siteInfo").val();
   // var fieldCount = inputVal.length;
   var emptyField = jQuery.inArray("",inputVal);
   
   //check if any filed is left empty
   if(emptyField === -1)
   {
	  
	   jQuery("#update_button").removeAttr("disabled"); 
	   jQuery(".form_enable").remove(); 
   }
   else
	  {
	    jQuery("label.howto_portfolio").addClass("form_invalid_warning");
	  }  

	
	
});
	


   
    //alert user on the word count for short info 
	jQuery("#shortInfo").keyup(function(){
		 var textCount = document.getElementById('shortInfo').value.length;
       if(textCount)
	        {
			 jQuery(".info").empty().prepend('<font style="color:#31B404;"> '+textCount+' So Far</font>');
	        }
       else
	        {
	            jQuery(".info").empty().prepend(" 90-100 chars");
	        }
		});


	// });//end of ready function




//$jq = jQuery.noConflict();
//$jq(document).ready(function() {
	
//});