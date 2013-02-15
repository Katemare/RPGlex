/*
* Library just show and hide some div on page. Can be modal or not.
* Can be modified few setting such as speed of show, hide and scroll.
* Can peak popup position
*       LT    T   RT
*       L     C   R
*       LB    B   RB
* Can call user function before and after show, before and after hide.
* 
* @author Mostovoy A.V.
* @version 1.3
* @example
* 
* script call examples
* <script type="text/javascript">
	<!--
		function showpp()
		{ // default popup show
			$("#pp").showPopup();
		// we can give some options
//			$("#pp").showPopup({modal:false});
		}

		function hidepp()
		{ // default popup hide
			$("#pp").hidePopup();
		}

		// assign to images in #gal block posibility to show img in rel attribute in popup.
		// if no rel attr will be placed image from src attr
		$(document).ready(function(){
			$("#gal img").imgPopup();
		});
	//-->
	</script>
*
* 2010
*/

(function($) {
	// default configuration properties
	var defaults = {
		modal:				true,	// show background or not
		modal_bg_color:		'black',// background color
        modal_bg_opacity:   0.8,    // modal background opacity
		position:			'C',	// can be C - center, L - left, R - right, T-top, B-bottom, LT-left top, LB, RT, RB
		show_speed:			500,    // show animation speed
		hide_speed:			100,    // hide animation speed
        scroll_speed:		100,    // scroll animation speed
		zindex:				1000,   // popup zindex
		before_show:		false,	// this is user function name to do before show popup
		after_show:			false,  // this is user function name to do after show popup
		before_hide:		false,  // this is user function name to do before hide popup
		after_hide:			false   // this is user function name to do after show popup
	};
	var obj = {
			el: '',
			pos: [],
			visible: false,
			modalBlackout: false,
			modalBgPos: [],
			isImage:false,
			imgDiv: false,
			imgDivId: 'popup-img-holder'
		};
	var scrollPos = [];
	var windowSize = [];
	var documentSize = [];


	$.fn.showPopup = function(options){

		var options = $.extend(defaults, options);

		show = function() {
			if (obj.visible) return;

			if (options.before_show)
				eval( options.before_show +'();' );

			if ( $(obj.el).get(0).tagName.toLowerCase() == 'img' )
			{
				obj.isImage = true;
				obj.imgDiv = $('<div id="'+obj.imgDivId+'"></div>').appendTo('body');
				$("#"+obj.imgDivId).html('<img src="'+($(obj.el).attr('rel')?$(obj.el).attr('rel'):$(obj.el).attr('src'))+'"/>');
				obj.el = $("#"+obj.imgDivId);
                var img = obj.el.find('img');
                obj.el.width( img.width() ).height( img.height() );
                img.bind("load",function(){
                    obj.el.width( $(this).width() ).height( $(this).height() );
                    moveToPosition();
                });
			}

			if (options.modal)
			{
				if ( jQuery('body').find('.popup-modal-blackout').length == 0 )
				{
					getModalBgPos();
					obj.modalBlackout = jQuery('<div class="popup-modal-blackout"></div>')
						.css({zIndex: options.zindex-1,
							  opacity: 0,
							  position: 'absolute',
							  left: obj.modalBgPos['left'],
							  top: obj.modalBgPos['top'],
							  'background-color': options.modal_bg_color,
							  width: documentSize['width'],
							  height: documentSize['height']})
						.appendTo('body')
						.bind("click", function(){
							$(obj.el).hidePopup();
						})
						.animate({opacity: options.modal_bg_opacity}, options.show_speed);
				}
			}

			bindGlobalEvents();

            getPosition();

			obj.el.stop()
					.css({'position': 'absolute',
							'opacity': 0,
							'z-index': options.zindex+1,
							'top': obj.pos['top'],
							'left': obj.pos['left']})
					.show()
					.animate({opacity: 1}, options.show_speed, function() {
						obj.el.show();
						obj.visible = true;
                        if (obj.isImage)
                        {
                            moveToPosition();
                        }
					});

			if (options.after_show)
				eval( options.after_show +'();' );
		};

		moveToPosition = function(){
			scrolling();
		};

		scrolling = function(){
			if (!obj.visible) return;
			getPosition();
			if (options.modal) {
				moveBg();
			}
			obj.el.stop().animate({ 'top': obj.pos['top'],
                                    'left': obj.pos['left']},
                                    options.scroll_speed);
		};

		getPosition = function(){
			getWindowSize();
			getScrollPos();
			fitToScreen();
			switch(options.position)
			{
				case 'L':	// left
					getLeftPos();
					break;
				case 'R':	// right
					getRightPos();
					break;
				case 'T':	// top
					getTopPos();
					break;
				case 'B':	// bottom
					getBottomPos();
					break;
				case 'LT':	// left top
					getLeftTopPos();
					break;
				case 'LB':	// left bottom
					getLeftBottomPos();
					break;
				case 'RT':	// right top
					getRightTopPos();
					break;
				case 'RB':	// right bottom
					getRightBottomPos();
					break;
				case 'C':	// center
				default:
					getCenterPos();
			}
		};

		getCenterPos = function(){			
			obj.pos['top'] = scrollPos['top'] + ( (windowSize['height']/2) - (obj.el.height()/2) );
			obj.pos['left'] = ( windowSize['width']/2 ) + scrollPos['left'] - (obj.el.width()/2);
		};

		getLeftPos = function(){
			obj.pos['top'] = scrollPos['top'] + ( (windowSize['height']/2) - (obj.el.height()/2) );
			obj.pos['left'] = scrollPos['left'];
		};

		getRightPos = function(){
			obj.pos['top'] = scrollPos['top'] + ( (windowSize['height']/2) - (obj.el.height()/2) );
			obj.pos['left'] = ( windowSize['width'] ) + scrollPos['left'] - ( obj.el.width() );
		};

		getTopPos = function(){
			obj.pos['top'] = scrollPos['top'];
			obj.pos['left'] = ( windowSize['width']/2 ) + scrollPos['left'] - (obj.el.width()/2);
		};

		getBottomPos = function(){
			obj.pos['top'] = scrollPos['top'] + ( (windowSize['height']) - (obj.el.height()) );
			obj.pos['left'] = ( windowSize['width']/2 ) + scrollPos['left'] - (obj.el.width()/2);
		};

		getLeftTopPos = function(){
			obj.pos['top'] = scrollPos['top'];
			obj.pos['left'] = scrollPos['left'];
		};

		getLeftBottomPos = function(){
			obj.pos['top'] = scrollPos['top'] + ( (windowSize['height']) - (obj.el.height()) );
			obj.pos['left'] = scrollPos['left'];
		};

		getRightTopPos = function(){
			obj.pos['top'] = scrollPos['top'];
			obj.pos['left'] = ( windowSize['width'] ) + scrollPos['left'] - (obj.el.width());
		};

		getRightBottomPos = function(){
			obj.pos['top'] = scrollPos['top'] + ( (windowSize['height']) - (obj.el.height()) );
			obj.pos['left'] = ( windowSize['width'] ) + scrollPos['left'] - (obj.el.width());
		};



		getScrollPos = function(){
			scrollPos['top'] = $(document).scrollTop();
			scrollPos['left'] = $(document).scrollLeft();
		};

		getWindowSize = function(){
			windowSize['height'] = $(window).height();
			windowSize['width'] = $(window).width();
		};

		getDocumentSize = function(){
			documentSize['height'] = $(document).height();
			documentSize['width'] = $(document).width();
		};

		getModalBgPos = function(){
			getDocumentSize();
			obj.modalBgPos['top'] = 0;//scrollPos['top'];
			obj.modalBgPos['left'] = 0;//scrollPos['left'];
		};

		moveBg = function(){
			getModalBgPos();
			obj.modalBlackout.stop()
							.css({left: obj.modalBgPos['left'],
									top: obj.modalBgPos['top'],
									width: documentSize['width'],
									height: documentSize['height']
								});
		};

		fitToScreen = function()
		{
			if ( windowSize['width'] < obj.el.width() )
			{
				obj.el.width( windowSize['width'] - 20 );
                obj.el.height( obj.el.height() + 15 );
				obj.el.css('overflow', 'auto');
			}
			if ( windowSize['height'] < obj.el.height() )
			{
				obj.el.height( windowSize['height'] - 20 );
                obj.el.width( obj.el.width() + 15 );
				obj.el.css('overflow', 'auto');
			}
		};

		bindGlobalEvents = function()
		{
			$(document).keydown(function(e){
				if ( obj.visible )
					switch(e.keyCode){
						case 27:	// ESC
//							if ( options.modal )
							$(obj.el).hidePopup();
						break;
					};
			});
		};

		return this.each(function () {
			// plugin code action
			obj.el = $(this);

			$(window).scroll(function () {
				scrolling();
			}).resize(function(){
				moveToPosition();
			});

			show();
			return this;
		});
	};

	$.fn.hidePopup = function(){

		var options = $.extend(defaults, options);

		hide = function (){
			if (!obj.visible) return;
			obj.visible = false;

			if (options.before_hide)
				eval( options.before_hide +'();' );

			if (options.modal) {
				obj.modalBlackout.unbind("click").animate({opacity: 0}, options.hide_speed, function() {
					jQuery(obj.modalBlackout).remove();
				});
			}
			obj.el.stop().animate({opacity: 0}, options.hide_speed, function() {
				obj.el.hide();
				obj.visible = false;
			});

			if (obj.isImage)
			{
				$(obj.el).remove();
				obj.isImage = false;
			}

			if (options.after_hide)
				eval( options.after_hide +'();' );
		};

		return this.each(function () {
			// plugin code action
			hide();
			return this;
		});
	};

	$.fn.moveToPosition = function(options){
		var options = $.extend(defaults, options);

		return this.each(function () {
			// plugin code action
			moveToPosition();
			return this;
		});
	};

	$.fn.imgPopup = function(options){

		var options = $.extend(defaults, options);

		return this.each(function () {
			// plugin code action

			$(this).each(function(){
				$(this).bind("click", function(){
					$(this).showPopup();
				});
			});
			return this;
		});
	};
})(jQuery);