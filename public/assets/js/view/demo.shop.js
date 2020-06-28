/** ********************************************** **
	@Shop Demo [usage example]
	@Last Update	10:19 AM Wednesday, May 13, 2015
*************************************************** **/

	jQuery(document).ready(function() {

		_shop();

	});



	/**	_shop() 
	******************************* **/
	function _shop() {	

		/** PRODUCT SINGLE
		 ** *********************** **/

		/**
			@COLOR SELECTOR 
		**/
		jQuery("#product-color-dd li a").bind("click", function(e) {
			e.preventDefault();

			var data_val 	= jQuery(this).attr('data-val').trim();
				_color 		= jQuery(this).attr('href').trim();

			/* change visual value and hidden input */
			jQuery("#product-selected-color").css({"background-color":_color});
			jQuery("#color").val(data_val); // UPDATE HIDDEN FIELD
		});


		/**
			@SIZE SELECTOR 
		**/
		jQuery("#product-size-dd li a").bind("click", function(e) {
			e.preventDefault();

			var data_val = jQuery(this).attr('data-val').trim();

			/* change visual value and hidden input */
			jQuery("#product-selected-size>span").empty().append(data_val);
			jQuery("#size").val(data_val); // UPDATE HIDDEN FIELD

			/* change visual selected */
			jQuery("#product-size-dd li").removeClass('active');
			jQuery(this).parent().addClass('active');
		});


		/**
			@QTY SELECTOR 
		**/
		jQuery("#product-qty-dd li a").bind("click", function(e) {
			e.preventDefault();
			
			var data_val = jQuery(this).attr('data-val').trim();

			/* change visual value and hidden input */
			jQuery("#product-selected-qty>span").empty().append(data_val);
			jQuery("#qty").val(data_val); // UPDATE HIDDEN FIELD

			/* change visual selected */
			jQuery("#product-qty-dd li").removeClass('active');
			jQuery(this).parent().addClass('active');
		});




		/** CHECKOUT
		 ** *********************** **/
		// New Account show|hide
		jQuery("#accountswitch").bind("click", function() {
			jQuery('#newaccount').slideToggle(200);
		});

		// Shipping Address show|hide
		jQuery("#shipswitch").bind("click", function() {
			jQuery('#shipping').slideToggle(200, function() {

				// scroll down to shipping area.
				if(jQuery('#shipping').is(":visible")) {
					_scrollTo('#shipping', 150);
				}
			
			});
		});

		// Payment Check/Money Order
		jQuery("#payment_check").bind("click", function() {
			jQuery("#ccPayment").slideUp(200);
		});

		// Credit Card
		jQuery("#payment_card").bind("click", function() {
			jQuery("#ccPayment").slideDown(200);
		});
	}