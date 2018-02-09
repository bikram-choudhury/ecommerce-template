

$(document).ready(function(){
	
	$('.form-toggle-head').click(function(){
		$(this).closest('.panel').find('.form-toggle-body').toggle(500);
	});
});
