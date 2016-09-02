$(document).ready(function() {
	$('#gallery').hide();
	
	$('#my_button2').click(function() {
		$('#gallery').slideDown(3000);
		$('#my_button2').attr('value','Скрыть галерею');
	}).dblclick(function() {
		$('#gallery').slideUp(3000);
		$('#my_button2').attr('value','Показать галлерею');
		
	});
	

$('#small a').click(function(eventObject) {
	if ($('#big img').attr('src') != $(this).attr('href')) {
	$('#big img').hide().attr('src',$(this).attr('href'));
	$('#big img').load(function() {
		$(this).fadeIn(2000);
	});
	}
	eventObject.preventDefault();
});

$('#small a img').click(function() {
	$('#small a img').fadeTo(1000,1);
	$(this).fadeTo(1000, 0.6);
});

});