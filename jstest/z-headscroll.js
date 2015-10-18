(function () {
    (window).scroll (function () {
        var sT = (this).scrollTop();
            if (sT >= 2) {
                ('.fixed-header').addClass('headerScroll')
            }else {
                ('.fixed-header').removeClass('headerScroll')
            }
    })
})
