<script type="text/javascript" src="jquery-1.7.min.js"/>
<script type="text/javascript">
//alert("test");
function changeTitle(title) { document.title = title; }
  
$('a').click(function() {
  history.pushState({ path: this.path }, '', this.href)
  $.get(this.href.replace(".php",".content.php"), function(data) {
  	 $('#main').fadeOut( 200, 'swing', function() { // simpleTransition
		 $('#main').html(data)
	  	 	.fadeIn( 100, 'swing' );
	  	 	changeTitle( $('#main title').text() );
  	 });
  });
  return false;
})

$(window).bind('popstate', function() {
  //$('#main').html(location.pathname);
  $.get(location.pathname.replace(".php",".content.php"), function(data) {
  	 $('#main').fadeOut( 200, 'swing', function() {
    	$('#main').html(data)
    		.fadeIn( 100, 'swing' );
    });
  })
})
</script>
