<script type="text/javascript" src="jquery-1.7.min.js"></script>
<script type="text/javascript">
	$('a').click(function() {
	  history.pushState({ path: this.path }, '', this.href);
	  
	  $.get(this.href.replace(".php",".content.php"), function(data) {
	  	 $('#main').fadeOut( 500, function() { // simpleTransition
			 $('#main').html(data)
		  	 	.fadeIn( 500 );
	  	 });
	  });
	  
	  return false;
	})

	$(window).bind('popstate', function() {
	  //$('#main').html(location.pathname);
	  $.get(location.pathname.replace(".php",".content.php"), function(data) {
	  	 $('#main').fadeOut( 500, function() {
		 	$('#main').html(data)
		 		.fadeIn( 500 );
		 });
	  })
	})
</script>
