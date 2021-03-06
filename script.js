
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
			window.location.href='2_code.php';
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
				$('.content').prepend('<p class="loading-text">Loading text...</p>');
				$('.content').prepend('<div class="spinner-wrap" style="position:absolute; top:'+hO+'px;"></div>');
				$('.spinner-wrap').css({'opacity' : 0}).load('/modules/spinner.php').animate({'opacity' : 1}, 500);

			}, 1500);

			window.setTimeout(function (){
				$('.loading-text').fadeOut(250);
			}, 4000);

			window.setTimeout(function (){
				$('.loading-text').fadeIn(250).text('next text lol');
			}, 4500);

			window.setTimeout(function (){
				$('.loading-text').fadeOut(250);
			}, 7000);

			window.setTimeout(function (){
				$('.loading-text').fadeIn(250).text('evenMORE TEXT');
			}, 7500);

			window.setTimeout(function (){
				$('.loading-text').fadeOut(250);
			}, 10000);
			window.setTimeout(function (){
				$('.loading-text').fadeIn(250).text('Wowwwwwwwwwwww');
			}, 10500);

			window.setTimeout(function (){
				var url = $('input').val();
				if (url == 'google.com3') {
					window.location.href="3_url.php?"+url;
				} else {
					window.location.href='4_forms.php?'+url;
				}
			}, 13500);
		}
	});
	

	

	$('label[for^="radio-choice-"').click(function(){
		if ($(this).attr('for') == 'radio-choice-n' ) {
			$('.td.form-input').addClass('form-input-show');
		} else {
			var fH = $('.td.form-input').height();
			$('.td.form-input').css({'height' : fH + 10});
			window.setTimeout(function(){
				$('.td.form-input').css({'height' : ''});
			});
			$('.td.form-input').removeClass('form-input-show');
		}
	});


	var fau = $('.formandurl').wrap('<div/>').parent().html();

	var urlrules = $('#domain-name-4').parent().find('div').wrap('<div/>').parent().html();

	console.log (urlrules);

	$(document).on("click", ".add-another-form", (function(e){
		e.preventDefault();
		console.log('adding another form');
		$('.formandurl').parent().append(fau);
		$('html, body').scrollTop( $(document).height() );
	}));

	$(document).on("click", ".add-another-rule", (function(e){
		if (!$(this).hasClass('delete-url-rule')) {
			e.preventDefault();
			var ths = $(this);
			console.log('adding another URL rule');
			ths.css({'color' : '#FFFFFF'}).addClass('delete-url-rule');
			window.setTimeout(function (){
					ths.css({'color' : ''});
					ths.text('Delete rule x')
				}, 500 );
			$('.add-another-rule').parent().parent().append(urlrules);
		} else {
			$(this).parent().remove();
		}
	}));
});

$(function(){

	// JQUERY FOR JQUERY LOADED CONTENT

	$(document).on("click", ".form-name-save", (function(e){
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
				tF.removeClass('error');
				tF.prop('readonly', true);
				$(this).addClass('hideText');
				window.setTimeout(function (){
					console.log('Timeout done')
					tE.text('Edit').removeClass('hideText');
				}, 500 );
			}
		}
	}));

});