
			$(document).ready(function() {
				
				$('.iosSlider').iosSlider({
					desktopClickDrag: true,
					snapToChildren: true,
					navSlideSelector: '.sliderContainer .slideSelectors .item',
					onSlideComplete: slideComplete,
					onSliderLoaded: sliderLoaded,
					onSlideChange: slideChange,
					autoSlide: true,
					scrollbar: true,
					scrollbarContainer: '.sliderContainer .scrollbarContainer',
					scrollbarMargin: '0',
					scrollbarBorderRadius: '0',
					autoSlideTimer: 5000,
					autoSlideTransTimer: 5000
				});
				
			});
			
			function slideChange(args) {
						
				$('.sliderContainer .slideSelectors .item').removeClass('selected');
				$('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
			
			}
			
			function slideComplete(args) {
				
				if(!args.slideChanged) return false;
				
				$(args.sliderObject).find('.text1, .text2, .text3, .text4, .text5').attr('style', '');
				
				$(args.currentSlideObject).find('.text1').animate({
					right: '28px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text2').delay(200).animate({
					right: '28px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text3').delay(400).animate({
					right: '28px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text4').delay(600).animate({
					right: '28px',
					opacity: '1'
				}, 700, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text5').delay(800).animate({
					right: '28px',
					opacity: '1'
				}, 700, 'easeOutQuint');
			}
			
			function sliderLoaded(args) {
					
				$(args.sliderObject).find('.text1, .text2, .text3, .text4, .text5').attr('style', '');
				
				$(args.currentSlideObject).find('.text1').animate({
					right: '28px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text2').delay(200).animate({
					right: '28px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text3').delay(400).animate({
					right: '28px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text4').delay(600).animate({
					right: '28px',
					opacity: '1'
				}, 700, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text5').delay(800).animate({
					right: '28px',
					opacity: '1'
				}, 700, 'easeOutQuint');
				
				slideChange(args);
				
			}