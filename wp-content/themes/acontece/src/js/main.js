//Drop Menu
$(function (){
	$('.editoria-drop').hover(
		function(){
			$(this).children('.editoria-drop-content').slideDown();
		}, 
		function(){
			$(this).children('.editoria-drop-content').slideUp();
		}
	);
});

//Drop arquivos
$(function (){
	$('.arquivos_list').hover(
		function(){
			$(this).children('.arquivos_drop-list').slideDown();
		}, 
		function(){
			$(this).children('.arquivos_drop-list').slideUp();
		}
	);
});

//Redireciona o Menu mobile
$(function (){
	$('#menu_mob').on('change', function(e) {
		var $option = $(this.options[this.selectedIndex]),
		external = $option.data('external'),
		url = $option.attr('value');

		if (url != '') {
			if (external) {
				window.open(url, 'window-' + Math.random());
			} else {
				document.location.href = url;
			}
		}
	});
});