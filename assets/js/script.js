$(document).ready(function(){
	
	$('select').formSelect();
	$('.tabs').tabs({});
	$('.datepicker').datepicker();
	$('.modal').modal();

	//bg change on login-registration page
	$('.login-registration-tabs li a').on('click', function(){
		let id 		= $(this).attr('id');
		let imgSrc 	= (id == 'Login') ? 'assets/img/bag.svg' : 'assets/img/binoculars.svg' ;
		let imgID 	= (id == 'Login') ? 'img-bag' : 'img-binoculars' ;
		$('.login-reg-img').attr('src', imgSrc);
		$('.login-reg-img').attr('id', imgID);
	})

	//rules modal - btn disable enable on scroll
	$('.rules-modal-content .rules').on('scroll', function() {
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            $('#rules-agree-btn').attr('disabled', false);
        } else{
        	$('#rules-agree-btn').attr('disabled', true);
        }
    });

	//aside menu animation
	$('.aside-menu-btn').on('click', function(e) {
		e.preventDefault();
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('main').removeClass('main-inside');
		} else {
			$(this).addClass('active');
			$('main').addClass('main-inside');
		}
	})

});