/**
 * Created by sergeigavrilko on 31.05.17.
 */
$(document).ready(function(){
    $('.slick-csm').slick({
        dots: true,
        infinite: false,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 10000
    });
});

$('.my_nav').scroolly([
    {
        to: 'doc-top + 10px',
        css: {
            background: 'rgba(255,255,255,0)',
            boxShadow: '0 0 0px rgba(0,0,0,0.1)'
        }
    },
    {
        from: 'doc-top + 10px',
        to: 'doc-bottom',
        css: {
            background: 'rgba(255,255,255,1)',
            boxShadow: '0 0 5px rgba(0,0,0,0.1)'
        }
    }
]);

$('#bs-example-navbar-collapse-1 a').scroolly([
    {
        to: 'doc-top + 10px',
        css: {
            color: 'rgba(255,255,255,1)'
        }
    },
    {
        from: 'doc-top + 10px',
        to: 'doc-bottom',
        css: {
            color: '#3F4C6B'
        }
    }
]);

$('.my_nav .header').scroolly([
    {
        to: 'doc-top + 10px',
        css: {
            color: 'rgba(255,255,255,1)'
        }
    },
    {
        from: 'doc-top + 10px',
        to: 'doc-bottom',
        css: {
            color: '#3F4C6B'
        }
    }
]);

$('.ios').scroolly([
    {
        to: 'doc-top + 10px',
        css: {
            content: 'url(static/ios.svg)'
        }
    },
    {
        from: 'doc-top + 10px',
        to: 'doc-bottom',
        css: {
            content: 'url(static/iosBlack.svg)'
        }
    }
]);

$('.android').scroolly([
    {
        to: 'doc-top + 10px',
        css: {
            content: 'url(static/android.svg)'
        }
    },
    {
        from: 'doc-top + 10px',
        to: 'doc-bottom',
        css: {
            content: 'url(static/androidBlack.svg)'
        }
    }
]);

$('#image1').scroolly([
    {
        to: 'doc-top + 2400px',
        css: {
            marginLeft: '700px'
        }
    },
    {
        from: 'doc-top + 2400px',
        to: 'doc-bottom',
        css: {
            marginLeft: '200px'
        }
    }
]);

$('#image2').scroolly([
    {
        to: 'doc-top + 2650px',
        css: {
            marginLeft: '0px'
        }
    },
    {
        from: 'doc-top + 2650px',
        to: 'doc-bottom',
        css: {
            marginLeft: '300px'
        }
    }
]);

$('#image3').scroolly([
    {
        to: 'doc-top + 2900px',
        css: {
            marginLeft: '700px'
        }
    },
    {
        from: 'doc-top + 2900px',
        to: 'doc-bottom',
        css: {
            marginLeft: '200px'
        }
    }
]);

$('#image4').scroolly([
    {
        to: 'doc-top + 3150px',
        css: {
            marginLeft: '0px'
        }
    },
    {
        from: 'doc-top + 3150px',
        to: 'doc-bottom',
        css: {
            marginLeft: '300px'
        }
    }
]);


$('#image5').scroolly([
    {
        to: 'doc-top + 3400px',
        css: {
            marginLeft: '700px'
        }
    },
    {
        from: 'doc-top + 3400px',
        to: 'doc-bottom',
        css: {
            marginLeft: '200px'
        }
    }
]);


$('#image6').scroolly([
    {
        to: 'doc-top + 3650px',
        css: {
            marginLeft: '0px'
        }
    },
    {
        from: 'doc-top + 3650px',
        to: 'doc-bottom',
        css: {
            marginLeft: '300px'
        }
    }
]);

$('.easy').scroolly([
    {
        to: 'doc-top + 2300px',
        css: {
            marginTop: '200px'
        }
    },
    {
        from: 'doc-top + 2300px',
        to: 'doc-bottom',
        css: {
            marginTop: '20px'
        }
    }
]);