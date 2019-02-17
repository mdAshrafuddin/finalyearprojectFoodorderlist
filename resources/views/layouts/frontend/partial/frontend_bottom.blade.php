<!-- cart-js -->
	<script src="{{asset('frontend/js/minicart.js')}}"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
		});
		
		<div id="staplesbmincart"><form method="post" class="" action="products.html" target="">    <button type="button" class="sbmincart-closer">×</button>    <ul>                <li class="sbmincart-item">            <div class="sbmincart-details-name">                <a class="sbmincart-name" href="http://localhost:8000/sylhet">Fish salad</a>                <ul class="sbmincart-attributes">                                                                            </ul>            </div>            <div class="sbmincart-details-quantity">                <input class="sbmincart-quantity" data-sbmincart-idx="0" name="quantity_1" type="text" pattern="[0-9]*" value="4" autocomplete="off">            </div>            <div class="sbmincart-details-remove">                <button type="button" class="sbmincart-remove" data-sbmincart-idx="0">×</button>            </div>            <div class="sbmincart-details-price">                <span class="sbmincart-price">$12.00</span>            </div>            <input type="hidden" name="w3ls_item_1" value="Fish salad">            <input type="hidden" name="amount_1" value="3">            <input type="hidden" name="shipping_1" value="undefined">            <input type="hidden" name="shipping2_1" value="undefined">        </li>            </ul>    <div class="sbmincart-footer">                    <div class="sbmincart-subtotal">                Subtotal: $12.00 USD            </div>            <button class="sbmincart-submit" type="submit" data-sbmincart-alt="undefined">Shop More</button>            </div>    <input type="hidden" name="cmd" value="_cart">    <input type="hidden" name="upload" value="1">            <input type="hidden" name="bn" value="sbmincart_AddToCart_WPS_US">    </form></div>
    </script>  
	<!-- //cart-js -->	
	<!-- Owl-Carousel-JavaScript -->
	<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  
	<!-- start-smooth-scrolling -->
	<script src="{{asset('frontend/js/SmoothScroll.min.js')}}"></script>  
	<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
	
	@stack('script')
</body>
</html>