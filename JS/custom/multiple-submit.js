//https://www.toddlahman.com/prevent-duplicate-form-submissions-with-jquery/

//JQuery plugin to prevent double submission
jQuery.fn.preventDoubleSubmission = function() {
  $(this).on('submit', function(e){
  	var $form = $(this);

  	if($form.data('submitted') === true){
  		//previously submitted  - don't submit again
  		e.preventDefault();
  	}else{

		//if utilize jquery validation - check first
  		if($(this).valid()){
	  		$form.data('submitted',true);
	  	}
  	}
  });

  return this;
}
//run
	$('form').preventDoubleSubmission();

//if there are ajax forms that should be submitted multiple times per page load, you can give them a class indicating that
// $("form:not(.js-allow-double-submission')").preventDoubleSubmission();

