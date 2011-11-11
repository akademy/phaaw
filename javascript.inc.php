<script type="text/javascript" src="jquery-1.7.min.js"/>
<script type="text/javascript">
//alert("test");
$('a').click(function() {
  history.pushState({ path: this.path }, '', this.href)
  $.get(this.href.replace(".php",".content.php"), function(data) {
  	 $('#main').fadeOut( 0, function() { // simpleTransition
		 $('#main').html(data)
	  	 	.fadeIn( 200 );
  	 });
  });
  return false;
})

$(window).bind('popstate', function() {
  //$('#main').html(location.pathname);
  $.get(location.pathname.replace(".php",".content.php"), function(data) {
  	 $('#main').fadeOut( 200, function() {
    	$('#main').html(data)
    		.fadeIn( 0 );
    });
  })
})
</script>
