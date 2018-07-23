$(document).ready(function(){
	$('select').formSelect();
	$('.tabs').tabs({});

	$('.login-registration-tabs li a').on('click', function(){
		let id 		= $(this).attr('id');
		let imgSrc 	= (id == 'Login') ? 'assets/img/bag.svg' : 'assets/img/binoculars.svg' ;
		let imgID 	= (id == 'Login') ? 'img-bag' : 'img-binoculars' ;
		$('.login-reg-img').attr('src', imgSrc);
		$('.login-reg-img').attr('id', imgID);
	})

});