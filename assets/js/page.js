$( document ).ready(function() {

	/* Initialise Tooltips */
	$('.shout .infos span').tooltip({
		html: true,
		placement: 'left',
		container: 'body',
		title: function(){
      		return $(this).find('i').text();
    	}
	});

	/* Changelog */
	var allVersions = $('#changelog ul').hide();
	$('#changelog > li').click(function() {
		if(!$(this).hasClass('active')){
			allVersions.slideUp();
			$(this).find('ul').slideDown().parent().addClass('active');
		}
		return false;
	});	

});