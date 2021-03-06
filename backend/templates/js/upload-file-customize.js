/*
 * Style File - jQuery plugin for styling file input elements
 *  
 * Copyright (c) 2007-2009 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Based on work by Shaun Inman
 *   http://www.shauninman.com/archive/2007/09/10/styling_file_inputs_with_css_and_the_dom
 *
 */

(function($) {
    
    $.fn.filestyle = function(options) {
                
        /* TODO: This should not override CSS. */
        var settings = {
            width : 250
        };
                
        if(options) {
            $.extend(settings, options);
        };
                        
        return this.each(function() {
            
            var self = this;
            var wrapper = $("<div class='btn-browse'>")
                            .css({
                                "width": '64' + "px",
                                "height": settings.imageheight + "px",
                                "background": "url(" + settings.image + ") no-repeat",
                                "background-position": "left top",
                                "display": "inline",
                                "position": "absolute",
                                "overflow": "hidden"
                            })
							.hover(
								function () {
									$(this).css({"background-position": "right -28px"});
								},
								function () {
									$(this).css({"background-position": "right top"});
								}

							);

                            
            var filename = $('<input class="file">')
                             .addClass($(self).attr("class"))
                             .css({
                                 "display": "inline",
                                 "width": settings.width + "px"
                             })
                             .bind('focus', function() {
                                    $(this).blur();
                             });

            $(self).before(filename);
            $(self).wrap(wrapper);

            $(self).css({
                        "position": "relative",
                        "height": settings.imageheight + "px",
                        "width": settings.width + "px",
                        "display": "inline",
                        "cursor": "pointer",
                        "opacity": "0.0"
                    });

            if ($.browser.mozilla) {
                if (/Win/.test(navigator.platform)) {
                    $(self).css("margin-left", "-142px");                    
                } else {
                    $(self).css("margin-left", "-168px");                    
                };
            } else {
                $(self).css("margin-left", settings.imagewidth - settings.width + "px");                
            };
			if ($.browser.msie && $.browser.version.substr(0,1) == 7) {
			  $('div.btn-browse').css("margin-top", "1px")
			}

            $(self).bind("change", function() {
                filename.val($(self).val().match(/[^\/\\]+$/));
            });
      
        });
        

    };
    
})(jQuery);
