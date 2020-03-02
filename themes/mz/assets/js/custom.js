$(function(){

    // nav shrink
    $(window).scroll(function(){
        var aTop = $('.navbar').height();
        if($(this).scrollTop()>=aTop){
            $('nav').addClass('shrink');
            /*$("#amclogo").attr("src","/storage/app/media/site/adria-mobil-cycling-logo-inline.png");*/
        } else {
            $('nav').removeClass('shrink');
            /*$("#amclogo").attr("src","/storage/app/media/site/adria-mobil-cycling-logo.png");*/
        }
    });

});

/* menu hover
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
    // bootstrap menu hover
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
        );
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
    // link on bootstrap dropdown menu item
    $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
    });
}); */