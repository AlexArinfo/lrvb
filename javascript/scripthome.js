// counter
$(document).ready(function() {
  var counters = $(".count");
  var countersQuantity = counters.length;
  var counter = [];
  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }
  var count = function(start, value, id) {
    var localStart = start;
    setInterval(function() {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 40);
  }
  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});
// fin counter

// slideshow
$("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
  .fadeOut(2000)
  .next()
  .fadeIn(2000)
  .end()
  .appendTo('#slideshow');
}, 3000);
// fin slideshow

// slick
$(document).ready(function(){
  $('.autoplay').slick({
    autoplay:true,
    autoplaySpeed:1500,
    arrows:false,
    centerMode:true,
    slidesToShow:3,
    slidesToScroll:2
  });
});
// fin slick