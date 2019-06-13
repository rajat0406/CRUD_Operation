$(function(){

	$("#name_error_message").hide();
	$("#age_error_message").hide();
	$("#mobile_error_message").hide();

	var error_name=false;
	var error_age=false;
	var error_mob=false;

	$("#name").focusout(function(){
		check_name();
	});

	$("#age").focusout(function(){
		check_age();
	});

	$("#mobile").focusout(function(){
		check_mob();
	});


	function check_name() {

		var inputname = $("#name").val();
		var pattern = /^[A-Za-z\s]+$/;	
		
		if(!inputname.match(pattern)){
			$("#name_error_message").html("Invalid name");
			$("#name_error_message").show();
			error_name = true;
		} else {
			$("#name_error_message").hide();
		}
	
	}


	function check_age(){

		var inputage = $("#age").val();
		var ageregex = /(?:\b|-)([1-9]{1,2}[0]?|100)\b/;

		if(!inputage.match(ageregex)){
			$("#age_error_message").html("lies between 1-100");
			$("#age_error_message").show();
			error_age = true;
		}
		else{
			$("#age_error_message").hide();
		}
	}


	function check_mob(){
		var inputmob=$("#mobile").val();
		var mob_regex = /^\d{10}$/;

		if(!inputmob.match(mob_regex)){
			$("#mobile_error_message").html("Should contain 10 digits");
			$("#mobile_error_message").show();
			error_mob = true;
		}
		else {
			$("#mobile_error_message").hide();
		}
	}


	$("#myForm").submit(function(){

		error_name=false;
		error_age=false;
		error_mob=false;

		check_name();
		check_age();
		check_mob();

		if(error_name==false&&error_age==false&&error_mob==false){
			return true;
		}
		else
			return false;

	});

});
