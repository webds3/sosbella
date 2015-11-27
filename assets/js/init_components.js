$(function () {
	$.material.init();
	$('.navbar-toggle').click(function(event) {
		$(this).toggleClass('activado');
	});
    $('.select').chosen();
	$('.table>tbody tr').on( 'click',function () {
        var renglon=$(this);
        var botonera=$('.boton');
		$('.table>tbody tr').not(this).removeClass('selected');
    	renglon.toggleClass('selected');

    	if(renglon.hasClass('selected')){
    		botonera.show().addClass('animated flipInX').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
    			$(this).removeClass('animated flipInX');
    		});
            var data=$(this).find('td:eq(0)').data();
            $('.boton .btn').data('id',data.id);
    	}
    	else{
    		botonera.fadeOut();
    	}
    });
});