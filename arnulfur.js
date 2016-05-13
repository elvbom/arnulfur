$(window).scroll(
    {
        previousTop: 0
    }, 
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) { //scrollar upp
        if (currentTop > (0.95*$(window).height())) {
            var p = $("header").css("background-color", "rgba(54, 128, 191, 0.90)");
            var q = $("header").css("padding", "0%");
        } else {
            var p = $("header").css("background-color", "rgba(54, 128, 191, 1)");
            var q = $("header").css("padding", "1%");
        }
    } else { //scrollar ner
        if (currentTop > (0.95*$(window).height())) {
            var p = $("header").css("background-color", "rgba(54, 128, 191, 0.90)");
            var q = $("header").css("padding", "0%");
        } else if (currentTop > (0.80*$(window).height())) {
        }
    } 
    this.previousTop = currentTop;
});
