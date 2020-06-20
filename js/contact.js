"use strict";

//Validate
var input = $('.validate-input .input');
$(".validate-form").on('submit',(function(e){
    //prevent default functionality
	e.preventDefault();
	var check = true;
	//Check if input has any false value for validate
    //If anything is false, it will return false
    for(var i=0; i<input.length; i++) {
        if(validate(input[i]) === false){
            showValidate(input[i]);
            check = false;
        }
    }
    if(check == true){
    	$.ajax({
    		url: "./handlers/Validation/validation_contactform.php",
    		type: "POST",
    		dataType:'json',
    		data: {
    		    "submit-contact": true,
    			"name":$('input[name="name"]').val(),
    			"email":$('input[name="email"]').val(),
    			"message":$('textarea[name="message"]').val()},
    		success: function(response){
                console.log(response);
                console.log(response.text);
                if(response.type === 'error'){
                    $("#mail-status").attr("class","error");
                }else if(response.type == "message"){
                    $("#mail-status").attr("class","success");
                }
    			$("#mail-status").html(response.text);
    			$('input[name="name"]').val('');
    			$('input[name="email"]').val('');
    			$('textarea[name="message"]').val('');
    		}
    	
    	});
        
    }
    return check;

}));


//Hide the validation all the time
$('.validate-form .input').each(function(){
    $(this).focus(function(){
        hideValidate(this);
    });
});

//Validation function
//This validates all the values if its on a proper format
function validate (input) {
    //Valid Email Regex https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
    if($(input).attr('name') === 'email') {
        if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            return false;
        }
    }else if($(input).attr('name') === 'name'){
        if($(input).val().trim().match(/^[a-zA-Z ]+$/) == null) {
            return false;
        }
    }else if($(input).attr('name') === 'phone'){
        if($(input).val().trim().match(/^[0-9]+$/) == null) {
            return false;
        }
    }
    else {
        if($(input).val().trim() === ''){
            return false;
        }
    }
}


//Function to add class to show errors
function showValidate(input) {
// Get the parent of the input field to add Class
    var thisAlert = $(input).parent();
    $(thisAlert).addClass('alert-validate');
}

//Function to remove the class that shows errors
function hideValidate(input) {
// Get the parent of the input field to remove Class
    var thisAlert = $(input).parent();
    $(thisAlert).removeClass('alert-validate');
}

window.onload = function() {
   // console.log("contact");
    pageLoader();
};