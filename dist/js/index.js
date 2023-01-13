
$('#btn-slider').on('click',function(){
	console.log('tes');
	if ($('#sliders').hasClass('active')) {
		$('#sliders').removeClass('active');
		$('#sliders-background').removeClass('active');

	} else {
		$('#sliders').addClass('active');
		$('#sliders-background').addClass('active');

	}
});


$('#sliders-background').click(function(){
	$('#sliders').removeClass('active');
	$('#sliders-background').removeClass('active');

});
