(function ($, undefined) {
    $(document).ready(function () {
        $(".cross").hide();
        $(".nav-menu").hide();
        $(".hamburger").click(function () {
            $(".nav-menu").slideToggle("slow", function () {
                $(".hamburger").hide();
                $(".cross").show();
            });
        });

        $(".cross").click(function () {
            $(".nav-menu").slideToggle("slow", function () {
                $(".cross").hide();
                $(".hamburger").show();
            });
        });

        $(function () {
            $('.menu-item-44 a').text(' ');
        });
    });
})(jQuery);
