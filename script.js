
$(document).ready(function(){
	////////////////////////////////////
	// STEP 1 > STEP 2
	////////////////////////////////////
	$('.go-to-code').click(function(e){
		e.preventDefault();
		console.log('yep');

		$(this).addClass('animated fadeOutDown');
		var pH = $('.illustration').parent().height();

		$('.illustration').parent().height(pH);
		$('.illustration').addClass('animated fadeOut').parent().find('h2, p').addClass('animated fadeOut');
		$('h1, h1 + p').addClass('animated fadeOut');

		window.setTimeout(function (){
			console.log('working');

			//$('.content').css({'opacity': 0}).load('steps/3_url.php').animate({'opacity' : 1}, 500);
			window.location.href='3_url.php';
		}, 1750);
	});


	////////////////////////////////////
	// STEP 2 > STEP 3
	////////////////////////////////////
	$('.submit-url').click(function(e){
		e.preventDefault();

		var tE = $(this);
			hO = $('h1').offset().top;

		console.log('checking url...');

		// Change the button text
		$(this).addClass('hideText');
		window.setTimeout(function (){
			console.log('Timeout done')
			tE.text('Checking...').removeClass('hideText');
		}, 500 );

		// Hide the h1 + p then load the spinner
		$('h1, h1 + p').addClass('animated fadeOut');
		window.setTimeout(function (){
			$('.content').prepend('<div class="spinner-wrap" style="position:absolute; top:'+hO+'px;"></div>');
			$('.spinner-wrap').css({'opacity' : 0}).load('/modules/spinner.php').animate({'opacity' : 1}, 500);
		}, 1500);

		window.setTimeout(function (){
			var url = $('input').val();
			window.location.href='4_forms.php?'+url;
		}, 5000);
	});
	


	$('.add-another-form').click(function(e){

		e.preventDefault();
		console.log('adding another form');

		// Make other forms visible
		$('.form-table.visible').last().next().addClass('visible').fadeIn();
		
		
	});
});