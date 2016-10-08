$(window).load(function() {
	var userFeed = new Instafeed({
	  get: 'user',
	  userId: '2073085655',
	  accessToken: '2073085655.48bb9ad.3b853f3dc8394b2ca74fb9e08a9b7137',
	  template:'<div class="col-md-3 col-lg-3 col-xs-6 col-sm-6"><a href="{{link}}" target="_blank"><img src="{{image}}" width="100%" style="padding-bottom:10px"/></a></div>',
	  clientId: '48bb9adf95a640c2a6726fe8a58458f9',
	  resolution: 'standard_resolution',
	  limit : 60,
	  after: function () {
	    var images = $("#instafeed a").fancybox();
	    $.each(images, function(index, image) {
	      var delay = (index * 75) + 'ms';
	      $(image).css('-webkit-animation-delay', delay);
	      $(image).css('-moz-animation-delay', delay);
	      $(image).css('-ms-animation-delay', delay);
	      $(image).css('-o-animation-delay', delay);
	      $(image).css('animation-delay', delay);
	      $(image).addClass('animated flipInX');
	    });
	  }
	});

	$('#load-more').on('click', function() {
	     userFeed.next();
	    
	});
	userFeed.run();
	
});