$(document).ready(function () {

  //const HOME = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']);

  function render(page, method) {

    $.ajax({
			type:'GET',
      url: window.location.origin + window.location.pathname+method,
			success: load
		});
		$("a").removeClass("active");
		$(page).addClass("active");
    let finalUrl = window.location.origin + window.location.pathname+method;
    history.pushState(method, null, finalUrl);
    // window.addEventListener('popstate', function(e) {
    //   let name = e.state;
    //   if (name == null) {
    //     header('Location: '.HOME);
    //   }
    //   else {
    //     render('#'+name, name);
    //   }
    // });
  }

  function load(data){
		$("#main").html(data);
  }

  let nav = document.querySelector('.nav');
  nav.addEventListener('click', function(e) {
    if (e.target !== e.currentTarget) {
      e.preventDefault();
      let method = e.target.getAttribute('href');
      let page = '#' + method;
      render(page, method);
    }
    e.stopPropagation();
  }, false);

  // $("#home").on( "click", function(e) {
	// 	e.preventDefault();
	// 	render('#home','home');
	// } );
  //
  // $("#techniques").on( "click", function(e) {
	// 	e.preventDefault();
	// 	render('#techniques','techniques');
	// } );
  //
  // $("#examples").on( "click", function(e) {
	// 	e.preventDefault();
	// 	render('#examples','examples');
	// } );
  //
  // $("#DIY").on( "click", function(e) {
	// 	e.preventDefault();
	// 	render('#DIY','DIY');
	// } );

});
