$(function() {
	
	var animationInterval = 2000; // in ms
	
	var galleryItems = $('#gallery li a');
	var circleItems = $('#circle li a');
	var numItems = galleryItems.length;
	var curItem = 0;
	var lastItem = 0;
	setItem(0);
	
	function setItem(item) {
	   $(galleryItems[item]).addClass('active');
	   $(circleItems[item]).addClass('active');
   }
   
   function unsetItem(item) {
      $(galleryItems[item]).removeClass('active');
      $(circleItems[item]).removeClass('active');
   }
	
	var timer = $.timer(function() {
	   unsetItem(curItem);
	   lastItem=curItem;
	   curItem = (curItem + 1) % numItems;
	   setItem(curItem);
	}, animationInterval, true);
	
	$('#circle').mouseover(function(e) {
	   var id = $(e.target).attr('alt');
	   lastItem = curItem;
	   curItem = parseInt(id[1])-1;
	   unsetItem(lastItem);
	   setItem(curItem);
		timer.pause();
	}).mouseout(function() {
		timer.play();
	});
	
	$('#gallery').mouseover(function() {
	   timer.pause();
	}).mouseout(function() {
	      timer.play();
	});
	
})
