$(function(){

	// Define mobile menu state for sub menu opening and closing.
	var mobileSubMenuState = 'closed'

	// Open and close nav on mobile
	$('.bars').on('click',function(e){

		var navData = $('.mobile-nav').data('nav');

		e.stopPropagation();
		
		if(navData == 'close'){
			$('.mobile-nav').addClass('nav-open')
							.data('nav', 'open')

			$('.bars>i').first().removeClass('fas fa-bars')
							.addClass('fas fa-times')
		}

		else {
			$('.mobile-nav').removeClass('nav-open')
							.data('nav', 'close');

			$('.bars>i').removeClass('fas fa-times')
						.addClass('fas fa-bars');

			$('.mobile-nav').removeClass('nav-sub-menu-open');

			$('.mobile-nav .dropdown-content').removeClass('dropdown-content-open');
			$('.mobile-nav .dropdown-content').addClass('dropdown-content-closed');

			mobileSubMenuState = 'closed';
		}
	});

	//Open sub menu on Mobile.
	$('.mobile-nav .dropbtn').on('click', function(){

		if(mobileSubMenuState == 'closed'){

			$('.dropdown-content').addClass('dropdown-content-open');
			$('.dropdown-content').removeClass('dropdown-content-closed');
			$('.mobile-nav').addClass('nav-sub-menu-open');
			mobileSubMenuState = 'open';
		}

		else {
			$('.dropdown-content').removeClass('dropdown-content-open');
			$('.dropdown-content').addClass('dropdown-content-closed');
			$('.mobile-nav').removeClass('nav-sub-menu-open');

			mobileSubMenuState = 'closed';
		}
	});

	//Open sub menu on desktop

	var desktopSubMenuState = 'closed'

	$('.desktop-nav .dropbtn').on('click', function(){

		if(desktopSubMenuState == 'closed'){

			$('.dropdown-content').addClass('desktop-sub-nav-open');
			$('.dropdown-content').removeClass('desktop-sub-nav-closed');
			desktopSubMenuState = 'open';
		}

		else {
			$('.dropdown-content').removeClass('desktop-sub-nav-open');
			$('.dropdown-content').addClass('desktop-sub-nav-closed');
			$('.mobile-nav').removeClass('nav-sub-menu-open');

			desktopSubMenuState = 'closed';
		}
	});

	var swiper = new Swiper('.swiper-container', {
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
		},
		autoplay: {
	        delay: 3000,
	        disableOnInteraction: true,
	    },
	    speed: 1800,

	});

});