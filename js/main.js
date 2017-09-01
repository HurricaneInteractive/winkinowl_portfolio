$ = jQuery.noConflict();

// hide flash messages
function hideFlashMsg(obj) {
    const flashmessagesInner = obj.find('#messages');

    if (flashmessagesInner.length > 0){
      setTimeout(() => {
        flashmessagesInner.addClass('hideFlash');
        setTimeout(() => {
          flashmessagesInner.remove();
        }, 1000);
    }, 3000);
    }
}

$(document).ready(function() {
    /* Smooth scrolling */
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function(e) {
            e.preventDefault();
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top - 50
					}, 1000);
					return false;
				}
			}
		});
	});
})