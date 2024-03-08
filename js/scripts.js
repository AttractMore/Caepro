$('.menuBar > ul > li.menu-item-has-children').hover(function() {
	$(this).closest("li").addClass("activeMenuItem");  
   $(this).find('.sub-menu').css('display', 'block');
}, function() {
   $(this).closest("li").removeClass("activeMenuItem"); 
   $(this).find('.sub-menu').css('display', 'none');
})