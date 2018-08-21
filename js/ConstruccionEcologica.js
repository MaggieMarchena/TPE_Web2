$(document).ready(function () {

  define('ORIGIN', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']));

  function render(page, method) {
    $.ajax({
			type:'GET',
			url: 'ORIGIN'+method,
      // url: window.location.origin + window.location.pathname+method,
			success: load
		});
		$("a").removeClass("active");
		$(page).addClass("active");
  }

  function load(data){
		$("#main").html(data);
  }

  $("#home").on( "click", function(e) {
		e.preventDefault();
		render('#home','home');
	} );

  $("#techniques").on( "click", function(e) {
		e.preventDefault();
		render('#techniques','techniques');
	} );

  $("#examples").on( "click", function(e) {
		e.preventDefault();
		render('#examples','examples');
	} );

  $("#DIY").on( "click", function(e) {
		e.preventDefault();
		render('#DIY','DIY');
	} );

});
