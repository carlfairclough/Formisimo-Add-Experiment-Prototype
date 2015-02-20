
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
	// STEP 3 > STEP 4
	////////////////////////////////////
	$('.submit-url').click(function(e){
		e.preventDefault();

		var tE = $(this);
			hO = $('h1').offset().top;

		console.log('checking url...');

		if (!$('input').val().length) {
			$('input').addClass('animated').addClass('shake').addClass('error');
			window.setTimeout(function (){
				$('input').removeClass('animated').removeClass('shake');
			}, 500 );
		} else { 
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
				if (url == 'google.com3') {
					window.location.href="3_url.php?"+url;
				} else {
					window.location.href='4_forms.php?'+url;
				}
			}, 5000);
		}
	});
	

	$('.form-name-save').click(function(e){
		// Change the button text
		var tE = $(this);
		var tF = $(this).prev();

		if (tF.prop('readonly')) {
			
			$(this).fadeOut(250);
			window.setTimeout(function (){
				console.log('Timeout done');
				tF.prop('readonly', false).focus();
				tE.text('Save').fadeIn(250);
			}, 500 );
		} else {

			if (!tF.val().length) {
				console.log('empty');
				tF.addClass('animated').addClass('shake').addClass('error');
				window.setTimeout(function (){
					tF.removeClass('animated').removeClass('shake');
				}, 500 );
			} else {
				tF.prop('readonly', true);
				$(this).addClass('hideText');
				window.setTimeout(function (){
					console.log('Timeout done')
					tE.text('Edit').removeClass('hideText');
				}, 500 );
			}
		}
	});

	$('label[for^="radio-choice-"').click(function(){
		if ($(this).attr('for') == 'radio-choice-n' ) {
			$('.td.form-input').addClass('form-input-show');
		} else {
			var fH = $('.td.form-input').height();

			$('.td.form-input').css({'height' : fH}).animate({'height' : ''},500);
			$('.td.form-input').removeClass('form-input-show');
		}
	});

	$('.add-another-form').click(function(e){

		e.preventDefault();
		console.log('adding another form');

		// Make other forms visible

		if (  $('.form-table.visible').last().next('.form-table').length > 0 ) {
			$('.form-table.visible').last().next().addClass('visible').fadeIn();
		} else {
			$('.manual-form').first().clone().appendTo('.form-table-wrapper').removeClass('hide').addClass('animate fadeIn');
		};

		$('html, body').scrollTop( $(document).height() );
		
		
	});
});