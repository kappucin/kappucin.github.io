$(document).ready(function(){
		 $(".portmain").hover(function() {
			$(this).animate({
				opacity:1
			},200);
		}, function() {
			$(this).animate({
				opacity:0.7
			},200);
		});
		 $('#submitform').ajaxForm({
			target: '#error',
			success: function() {
			$('#error').fadeIn('slow');
			}
		});
	 }); 