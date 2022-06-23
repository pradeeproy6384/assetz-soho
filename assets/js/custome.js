// $(window).scroll(function() {
// 	var sticky = $('.pr-nav'),
// 		scroll = $(window).scrollTop();
// 	if (scroll >= 50) {
// 		sticky.addClass('fixed')
// 	} else {
// 		sticky.removeClass('fixed')
// 	}
// });
$(function($) {
	let url = window.location.href;
	$('nav ul li a').each(function() {
		if (this.href === url) {
			$(this).addClass('activenav')
		}
	})
});

function openNav() {
	document.getElementById("mySidenav").style.width = "250px"
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0"
}
// var swiper = new Swiper('.swiper-container', {
// 	pagination: {
// 		el: '.swiper-pagination',
// 		type: 'progressbar',
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	},
// })