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
        $('.post.type-post p:has(img)').css(
            {
                'text-align': 'center',
                'margin': '45px auto'
            }
        );
        $('.social-likes').before("<span class='social-title'>Share this article...</span>");

    });
})(jQuery);
