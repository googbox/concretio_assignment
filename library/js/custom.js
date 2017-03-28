//Custom JS file Created by Ankita Gupta
$(document).ready(function(){ // Starts when Document is done with loading all the contents
		// Price range slider 
		$("#minrange").on('change',function(){
			$("#minrangeval").val($("#minrange").val());
		});
		$("#maxrange").on('change',function(){
			$("#maxrangeval").val($("#maxrange").val());
		});
		
		//Submit forms on every filter element change event
		$('.form_ele').change(function(){
			$("#search_form").submit();
			return false;
		});
	});