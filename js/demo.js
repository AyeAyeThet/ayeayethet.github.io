/*var $body = $('body');
var backgrounds = [
        { src: 'img/bg/slide1.jpg', valign: 'top' },
        { src: 'img/bg/slide2.jpg', valign: 'top' },
        { src: 'img/bg/slide3.jpg', valign: 'top' },
        { src: 'img/bg/slide4.jpg', valign:'top'}
    ];
        $body.vegas({
        preload: true,
        transitionDuration: 4000,
        delay: 10000,
        slides: backgrounds
    });
*/
        $('body').backstretch([
          "img/bg/slide1.jpg",
          "img/bg/slide2.jpg",
          "img/bg/slide3.jpg"	
        ], {
            fade: 750,
            duration: 4000
        });

