$('#carousel-main').carousel({
        interval: false
});

$('#carousel-main').on('slid', function () {
        alert("Slid Event");
        console.log('slid event');
});

$('#carousel-main').on('slide.bs.carousel', function () {
  		alert("Slide Event");
        console.log('slide event');
})
