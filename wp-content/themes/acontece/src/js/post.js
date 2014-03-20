//Posicionando o destaque
$(function() {
	var altura = $('.post-top').height();
	var padding_top = altura + 73;
	$('.destaque').css('padding-top', padding_top);
});

//Fancybox
$(document).ready(function() {
	$('.post > img').facebox();
});