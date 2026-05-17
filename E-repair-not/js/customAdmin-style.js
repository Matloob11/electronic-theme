jQuery(document).ready(function(){

	jQuery('#page_template option').each(function(){
		var tt = jQuery(this).val();
		if (tt =='default') jQuery(this).remove();
	});


	curcolorIni = jQuery('#page_template :selected').val();
	 if(curcolorIni == 'page-blog.php') { jQuery('#truediv2').css({display:'block'}); }
	 else jQuery('#truediv2').css({display:'none'});
	
	jQuery('#page_template').change(function(){
        curcolor = jQuery('#page_template :selected').val();
        if(curcolor == 'page-blog.php') { jQuery('#truediv2').fadeIn(300); }
        else { jQuery('#truediv2').fadeOut(300); }
	});


/*  ******************* END OF FILE***************************/
});


