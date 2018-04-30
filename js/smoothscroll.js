$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top - 63
      }, 1000);
      return false;
    }
  }
  
  
  //jquery if ($("#donotremove").length === 0){
		// window.location.href = "http://www.tonyebrown.com";
  // }
  
  // <script>
			// if (!document.getElementById("donotremove")) {
			   // window.location.href = "http://www.tonyebrown.com";
		    // }
		// </script>
});

