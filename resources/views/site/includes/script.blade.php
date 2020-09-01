<!-- JavaScripts -->
<script type="text/javascript" src="{{ asset('assets/front/js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/jquery_edit.js') }}"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>


<script>
    new WOW().init();

</script>


<script>
    $(function () {
        'use strict';

        $('.sizeimg .carousel-fade .carousel-inner > .item > img,.sizeimg .carousel-fade .carousel-inner > .item').height($(window).height());
        $(window).resize(function () {

            $('.sizeimg .carousel-fade .carousel-inner > .item > img,.sizeimg .carousel-fade .carousel-inner > .item').height($(window).height());
        });
    });

</script>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }

</script>

<script>
    $(function () {
        $(document).on('click', 'a.page-scroll', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 900, 'easeInOutExpo');
            event.preventDefault();
        });
    });

</script>
