$(document).ready(function(){

    $(".site-account div a").height($(".site-nav").height() - 24);

    $(".site-header .site-search").click(function() {
        openSearchBox()
    });
    $(".site-nav li.mobile-search-icon").click(function() {
        openSearchBox()
    });

    $(".site-nav-item-mega").hoverIntent(function() {
        $(this).find(".mega-nav").stop().slideToggle()
    });
    $(".site-my-account").hoverIntent(function() {
        $(this).find(".nav-user-backend").stop().slideToggle()
    });
    $(".shop-nav .shop-cat").hoverIntent(function() {
        $(this).find(".shop-cat-list").stop().slideToggle().mega-nav
    });
    $(".shop-nav ul li").hover(function() {
        $(this).toggleClass("selected")
    });
    $(".shop-item .item-product").hover(function() {
        $(this).find(".actionbox").stop().fadeToggle("fast")
    });
    $(".product-item .product-img").hover(function() {
        $(this).find(".actionbox").stop().fadeToggle("fast")
    });


    openSearchBox = function() {
        layer.open({
            type: 1,
            shade: !1,
            title: !1,
            area: ["95%", "95%"],
            content: $(".search-box"),
            cancel: function(n) {
                layer.close(n)
            }
        })
    };

    $("img.lazy").lazyload({
        event: "scrollstop"
    });

});
