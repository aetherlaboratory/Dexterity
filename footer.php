</article>
</div> <!--#Wrapper-->



<?php get_template_part( 'menu' );?>
</div>



<?php wp_footer(); ?>
	
	
<div class="col-auto mb-5 mx-auto text-center copyright fs-h1 minty"><span>&copy; 2023 Dexterity. All Rights Reserved.</span></div>

<?php
// You can add or change the conditions here depending on your needs

if (is_front_page()) {
	// Code for the front page
	?>
	
	<script src="https://cdn.rawgit.com/ConnorAtherton/walkway/master/walkway.min.js"></script>
	<script>window.onload = function () {
	  var svg = new Walkway({
		selector: '#splash',
		easing: 'easeInOutCubic',
		duration: 3100
	  }).draw(); 
	};

</script>
	


	
	
	
	
	<?php
	
	
}  elseif (is_page(array('logos','digital-designs', 'print-designs', 'apparel-designs'))) {
	// Code for the woodwork page
	?>
	<?php get_template_part( 'post', 'modals' );?>
	<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : -0.5,
					y : 1
				},
				onOpenItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 50);
							el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
							el.style.transform = 'scale3d(0.1,0.1,1)';
							el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
							el.style.transition = 'opacity .4s, transform .4s';
							el.style.WebkitTransform = 'scale3d(1,1,1)';
							el.style.transform = 'scale3d(1,1,1)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>
	<?php

  } elseif (is_page('typefaces')) {
	
	// Code for the sculptures page
	} elseif (is_page('shop')) {
	  
	  // Code for the sculptures page
	  } elseif (is_page('collection')) {
	
} else {
	// Code for all other pages
}
?>

</body>
</html>
