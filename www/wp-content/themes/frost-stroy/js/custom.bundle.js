function scrollUp(e, t) { $(e).click(function(e) { e.preventDefault(); var i = $(t).offset().top; return $(scroller).stop().animate({ scrollTop: i }, 800), !1 }) }

function oneHeightItems() {
    function e(e, t) {
        function i() {
            clearTimeout(o);
            var t = 0;
            $(e).removeAttr("style");
            var i = !1,
                s = $(window).width();
            s > 1366 ? i = !0 : 1366 >= s && s > 1280 && 1 == a.notebook ? i = !0 : 1280 >= s && s > 1024 && 1 == a.macBook ? i = !0 : 1024 >= s && s > 992 && 1 == a.ipadHorizontal ? i = !0 : 992 >= s && s > 767 && 1 == a.ipadVertical ? i = !0 : 767 >= s && s > 666 && 1 == a.iPhoneHorizontal ? i = !0 : 666 >= s && s > 479 && 1 == a.iPhoneVertical ? i = !0 : 479 >= s && 1 == a.phoneHorizontal && (i = !0), 1 == i && (o = setTimeout(function() { $(e).each(function() { $(this).height() > t && (t = $(this).height()) }), $(e).css("height", t) }, 0))
        }
        var o = null,
            a = { notebook: !1, macBook: !1, iPadHorizontal: !1, iPadVertical: !1, iPhoneHorizontal: !1, iPhoneVertical: !1, phoneHorizontal: !1 };
        $.extend(a, t), i(), $(window).load(function() { i() }), $(window).resize(function() { i() })
    }
    e(".oneHeight", { notebook: !0, macBook: !0 })
}

function animationBlock(e) {
    function t() {
        var t = $(window).height() + $(window).scrollTop(),
            i = $(window).scrollTop() + $(window).height() / 1.5;
        e.each(function() {
            if (i > $(this).offset().top || t > .98 * $("body").height()) {
                var e = $(this),
                    o = 0;
                e.find(".animate-it").addClass("animated");
                var a = setInterval(function() { e.find(".animate-delay").eq(o).addClass("animated"), o++, e.find(".animate-delay").length == o && clearInterval(a) }, 200)
            }
        })
    }
    $(window).scroll(function() { t() }), t()
}

function goTo() {
    $("a.anchor ").click(function(e) {
        e.preventDefault();
        var t = $(this).attr("href"),
            i = $(t).offset().top - 65;
        $(scroller).animate({ scrollTop: i }, 800)
    })
}

function cutText() {
    var e = "...",
        t = e.length;
    $(".cut-text").each(function() {
        var i = $(this).data("cut") - t,
            o = $.trim($(this).text());
        if (o.length > i && i > 0) {
            var a = o.substring(0, i) + e;
            $(this).text(a)
        }
    })
}

function bindExample() {
    function e() { $(document).unbind("click"), console.log("unbinded"), $.ajax({ url: "ajax.php", method: "POST", success: function() { setTimeout(function() { console.log("binded"), $(document).bind("click", e) }, 4e3) } }) } $(document).bind("click", e)
}

function headeButer(e, t) {
    e && (e.click(function() { $(window).width() < 1024 - $.scrollbarWidth() && ($(this).toggleClass("active"), t.stop().slideToggle()) }), $(document).on("click touchstart", function(i) {
        if ($(window).width() < 1024 - $.scrollbarWidth()) {
            var o = t;
            o.is(i.target) || 0 !== o.has(i.target).length || e.is(i.target) || 0 !== e.has(i.target).length || (t.slideUp(), e.removeClass("active"))
        }
    }))
}

function numberWithSpaces(e) { var t = e.toString().split("."); return t[0] = t[0].replace(/\B(?=(\d{3})+(?!\d))/g, " "), t.join(".") }

function tabsCheck() {
    var e = $(".third__tab");
    if (e.length > 0) {
        e.hasClass("active") || e.eq(0).addClass("active");
        var t = 0;
        e.each(function() { $(this).hasClass("active") && (t = $(this).index() - 1) }), $(".third__table").css("display", "none"), $(".third__table").eq(t).css("display", "block")
    }
}

function toggleActive() {
    var e = $(".third__tab");
    e.length > 0 && e.click(function() { e.removeClass("active"), $(this).addClass("active"), tabsCheck() })
}

function tabindex() {
    var e = $(".slider__tabindex");
    e.length > 0 && e.click(function() {
        if ($(this).closest(".slider__tab").hasClass("active")) $(this).closest(".slider__tab").removeClass("active"), $(this).next(".slider__dropdown").stop().slideUp();
        else {
            $(".slider__tab").removeClass("active"), $(".slider__dropdown").stop().slideUp(), $(this).closest(".slider__tab").addClass("active"), $(this).next(".slider__dropdown").stop().slideDown(), $(this).closest(".slider__tab").find("li").removeClass("active"), $(".slider__tab").removeClass("active"), $(".slider__dropdown").stop().slideUp(), $(this).find("li:first-child").addClass("active");
            var e = parseInt($(this).closest(".slider__tab").find("li:first-child").attr("data-slide"));
            $(this).closest(".slider__tab").addClass("active"), $(this).closest(".slider__tab").find(".slider__dropdown").stop().slideDown(), $(".techno").slick("slickGoTo", e - 1)
        }
    })
}

function garageSlider() {
    var e = $(".garage__slider");
    e.length && e.slick({ dots: !1, arrows: !1, infinity: !1, speed: 300, slidesToShow: 14, swipeToSlide: !0, responsive: [{ breakpoint: 1700, settings: { slidesToShow: 13 } }, { breakpoint: 1600, settings: { slidesToShow: 12 } }, { breakpoint: 1500, settings: { slidesToShow: 11 } }, { breakpoint: 1400, settings: { slidesToShow: 10 } }, { breakpoint: 1280, settings: { slidesToShow: 9 } }, { breakpoint: 1100, settings: { slidesToShow: 8 } }, { breakpoint: 992, settings: { slidesToShow: 7 } }, { breakpoint: 860, settings: { slidesToShow: 6 } }, { breakpoint: 740, settings: { slidesToShow: 5 } }, { breakpoint: 620, settings: { slidesToShow: 4 } }, { breakpoint: 500, settings: { slidesToShow: 3 } }, { breakpoint: 380, settings: { slidesToShow: 2 } }] })
}

function showHideGarage() {
    var e = $(".garage__button-wrap"),
        t = $(".garage__button-wrap a"),
        i = $(".garage__text");
    t.length > 0 && t.click(function(t) { return t.preventDefault(), e.hasClass("active") ? (e.removeClass("active"), i.slideDown()) : (e.addClass("active"), i.slideUp()), !1 })
}

function garSlide() {
    var e = $(".garage__slide"),
        t = $(".garage__button-prev"),
        i = $(".garage__button-next"),
        o = $(".garage__img"),
        a = $(".slick-active"),
        s = $(".garage__text-container"),
        n = a.find(".garage__slide-hidden").html(),
        r = a.find(".garage__slide").attr("data-img");
    s.html(n), o.html('<img src="' + r + '" alt="" data-object-fit>'), setTimeout(function() { checkScrollButton() }, 300), e.click(function() {
        e.removeClass("active"), $(this).addClass("active");
        var t = $(this).find(".garage__slide-hidden").html(),
            i = $(this).attr("data-img");
        o.html('<img src="' + i + '" alt="">'), s.html(t), setTimeout(function() { checkScrollButton() }, 300)
    }), t.on("click", function(e) {
        e.stopPropagation();
        var t = $('.garage__slide[data-img="' + $(this).closest(".garage__content").find(".garage__img img").attr("src") + '"]'),
            i = $(t[0]).parent().prev().find(".garage__slide");
        if (i.length) {
            var a = $(i).find(".garage__slide-hidden").html(),
                n = $(i).attr("data-img");
            o.html('<img src="' + n + '" alt="">'), s.html(a)
        }
    }), i.on("click", function(e) {
        e.stopPropagation();
        var t = $('.garage__slide[data-img="' + $(this).closest(".garage__content").find(".garage__img img").attr("src") + '"]'),
            i = $(t[0]).parent().next().find(".garage__slide");
        if (i.length) {
            var a = $(i).find(".garage__slide-hidden").html(),
                n = $(i).attr("data-img");
            o.html('<img src="' + n + '" alt="">'), s.html(a)
        }
    })
}

function checkScrollButton() {
    var e = $(".garage__text-container").height(),
        t = $(".garage__text-container .garage__scroll-text"),
        i = t.height();
    e > i ? $(".scrolle-the-text").closest("div").hide() : $(".scrolle-the-text").closest("div").show()
}

function garageScrollText() {
    var e = $(".scrolle-the-text");
    e.click(function(t) {
        t.preventDefault();
        var i = $(".garage__text-container").height(),
            o = $(".garage__text-container .garage__scroll-text"),
            a = o.height(),
            s = o.attr("data-last");
        "undefined" == typeof s && (o.attr("data-last", 0), s = 0);
        var n = parseInt(s) + i;
        o.attr("data-last", n), $(".garage__text-container").scrollTop() + i < a ? $(".garage__text-container").animate({ scrollTop: n }, 500, function() { a - $(".garage__text-container").scrollTop() < i && (e.text("Р’ РЅР°С‡Р°Р»Рѕ РєРµР№СЃР°"), e.closest(".garage__button--down").addClass("up")) }) : ($(".garage__text-container").animate({ scrollTop: 0 }, 500), o.attr("data-last", 0), e.text("Р§РёС‚Р°С‚СЊ РґР°Р»СЊС€Рµ"), e.closest(".garage__button--down").removeClass("up"))
    })
}

function closeColorpicker() {
    $(".colorpicker__close").click(function() { $(this).closest("li").removeClass("active") }), $(".colorpicker__ttl").click(function() { $(".colorpicker>li").removeClass("active"), $(this).closest("li").addClass("active") }), $(window).click(function() {
        var e = $(".colorpicker>li");
        e.is(event.target) || 0 !== e.has(event.target).length || $(".colorpicker>li").removeClass("active")
    }), $("#menucontainer").click(function(e) { e.stopPropagation() })
}

function checkGate() {
    $("input[name=size]").on("change", function() {
        var e = parseInt($(this).val()),
            t = $(".constructor__col .disabled-item");
        0 == e ? t.css("display", "block") : 2 == e && (t.css("display", "none"), $("input[name=roof]").eq(0).prop("checked", "true"))
    })
}

function initConstructorView() {
    var e = $(".constructor__img");
    e.empty();
    var t = { size: parseInt($("input[name=size]:checked").val()), roof: parseInt($("input[name=roof]:checked").val()), colWall: $("input[name=wall-col]:checked").val(), colRoof: $("input[name=roof-col]:checked").val(), colElem: $("input[name=elem-col]:checked").val(), colGate: $("input[name=gate-col]:checked").val() },
        i = t.size + t.roof,
        o = $(document.createElement("img")),
        a = $(document.createElement("img")),
        s = $(document.createElement("img")),
        n = $(document.createElement("img")),
        r = $(document.createElement("img")),
        l = $(document.createElement("img"));
    o.attr("src", "images/garage/" + i + "/under.jpg"), e.append(o), "undefined" != typeof t.colGate && (a.attr("src", "images/garage/" + i + "/gate/" + t.colGate), e.append(a)), "undefined" != typeof t.colElem && (s.attr("src", "images/garage/" + i + "/panels/" + t.colElem), e.append(s)), "undefined" != typeof t.colRoof && (n.attr("src", "images/garage/" + i + "/roof/" + t.colRoof), e.append(n)), "undefined" != typeof t.colWall && (r.attr("src", "images/garage/" + i + "/wall/" + t.colWall), e.append(r)), l.attr("src", "images/garage/" + i + "/over.png"), e.append(l)
}

function reinitConstructorsEvents() { $("input[name=size]").on("change", function() { initConstructorView() }), $("input[name=roof]").on("change", function() { initConstructorView() }) }

function colorPickInputEvent() {
    $("input[name=wall-col]").on("change", function() {
        var e = $("input[name=wall-col]:checked + span").attr("style");
        $(this).closest("li.active").find(".colorpicker__ttl span").attr("style", e), initConstructorView()
    }), $("input[name=gate-col]").on("change", function() {
        var e = $("input[name=gate-col]:checked + span").attr("style");
        $(this).closest("li.active").find(".colorpicker__ttl span").attr("style", e), initConstructorView()
    }), $("input[name=roof-col]").on("change", function() {
        var e = $("input[name=roof-col]:checked + span").attr("style");
        $(this).closest("li.active").find(".colorpicker__ttl span").attr("style", e), initConstructorView()
    }), $("input[name=elem-col]").on("change", function() {
        var e = $("input[name=elem-col]:checked + span").attr("style");
        $(this).closest("li.active").find(".colorpicker__ttl span").attr("style", e), initConstructorView()
    })
}

function colorInit() {
    var e = $("input[name=wall-col]:checked + span").attr("style");
    $("input[name=wall-col]").closest(".colorpicker__list").closest("li").find(".colorpicker__ttl span").attr("style", e);
    var t = $("input[name=gate-col]:checked + span").attr("style");
    $("input[name=gate-col]").closest(".colorpicker__list").closest("li").find(".colorpicker__ttl span").attr("style", t);
    var i = $("input[name=roof-col]:checked + span").attr("style");
    $("input[name=roof-col]").closest(".colorpicker__list").closest("li").find(".colorpicker__ttl span").attr("style", i);
    var o = $("input[name=elem-col]:checked + span").attr("style");
    $("input[name=elem-col]").closest(".colorpicker__list").closest("li").find(".colorpicker__ttl span").attr("style", o)
}

function accordeon() { $(".accordeon__dropdown").eq(0).stop().slideDown(), $(".accordeon__dropdown").eq(0).prev("h5").addClass("active"), $(".accordeon__left h5").click(function() { $(this).hasClass("active") ? ($(this).removeClass("active"), $(this).next(".accordeon__dropdown").stop().slideUp()) : ($(".accordeon__left h5").removeClass("active"), $(".accordeon__dropdown").stop().slideUp(), $(this).addClass("active"), $(this).next(".accordeon__dropdown").stop().slideDown()) }) }

function feedbacks() {
    var e = $(".feedbacks--mobile .feedbacks__slider");
    e.slick({ dots: !1, arrows: !0, infinity: !1, speed: 300, slidesToShow: 1 });
    var t = $(".feedbacks--desctop .feedbacks__slider");
    t.slick({ dots: !1, arrows: !0, infinity: !0, speed: 300, slidesToShow: 3, centerMode: !0 }), $(e).on("beforeChange", function(e, t, i) { $(t.$slides.get(i)).find("iframe").attr("src", $(t.$slides.get(i)).find("iframe").attr("src")) }), $(t).on("beforeChange", function(e, t, i) { $(t.$slides.get(i)).find("iframe").attr("src", $(t.$slides.get(i)).find("iframe").attr("src")) }), $(".feedbacks--desctop").on("click", ".slick-slide", function(e) { e.stopPropagation(), $(this).next(".slick-slide").hasClass("slick-active") && $(t).slick("slickPrev") }), $(".feedbacks--desctop").on("click", ".slick-slide", function(e) { e.stopPropagation(), $(this).prev(".slick-slide").hasClass("slick-active") && $(t).slick("slickNext") })
}

function googleMap(e) {
    function t() {
        function t(e) {
            setTimeout(function() {
                var t = new google.maps.LatLng(markers[e].cordX, markers[e].cordY),
                    i = '<div class="marker-test"></div>';
                new google.maps.InfoWindow({ content: i }), new google.maps.Marker({ position: t, map: s, icon: imageMarker, animation: google.maps.Animation.DROP })
            }, 200 * e)
        }

        function i() { null !== l.getAnimation() ? l.setAnimation(null) : l.setAnimation(google.maps.Animation.BOUNCE) }
        for (var o = new google.maps.LatLng(cordX, cordY), a = { zoom: zoom, center: o, scrollwheel: !1, draggable: !1, zoomControl: !1, disableDoubleClickZoom: !0, disableDefaultUI: !0, mapTypeId: google.maps.MapTypeId.ROADMAP }, s = new google.maps.Map(document.getElementById(e), a), n = '<div class="marker-test">' + googleText + "</div>", r = new google.maps.InfoWindow({ content: n }), l = new google.maps.Marker({ position: o, map: s, animation: google.maps.Animation.DROP }), c = 0; c < markers.length; c++) t(c);
        l.addListener("click", i), google.maps.event.addListener(l, "click", function() { r.open(s, l) })
    }
    t()
}

function seemoreServices() {
    var e = $(".seemore-button span"),
        t = $(".services__row-wrap.showed");
    e.click(function() { e.hasClass("hide") ? (e.text("РџРѕРєР°Р·Р°С‚СЊ РµС‰Рµ"), e.removeClass("hide"), $(t[t.length - 1]).css("max-height", "150px"), $(".services__row-wrap:not(.showed)").stop().slideUp()) : ($(".services__row-wrap:not(.showed)").stop().slideDown(), $(t[t.length - 1]).css("max-height", $(window).width() > 1024 ? "900px" : "2000px"), e.text("РЎРєСЂС‹С‚СЊ"), e.addClass("hide")) })
}

function technoSliderInit() {
    var e = $(".techno");
    e.on("init", function() {
        var e = $(".slick-current").attr("data-slide");
        $(".slider__tabs li[data-slide=" + e + "]").addClass("active"), checkTabsTechno()
    }), e.slick({ dots: !1, arrows: !0, infinity: !0, speed: 300, slidesToShow: 1 }), e.on("afterChange", function() {
        $(".slider__tabs li").removeClass("active"), $(".slider__tab").removeClass("active"), $(".slider__dropdown").stop().slideUp();
        var e = $(".slick-current").attr("data-slide");
        $(".slider__tabs li[data-slide=" + e + "]").addClass("active"), checkTabsTechno()
    }), clickOnTechnoTabs()
}

function clickOnTechnoTabs() {
    $(".slider__tabs li").click(function() {
        if (!$(this).hasClass("active")) {
            $(".slider__tabs li").removeClass("active"), $(".slider__tab").removeClass("active"), $(".slider__dropdown").stop().slideUp(), $(this).addClass("active");
            var e = parseInt($(this).attr("data-slide"));
            $(this).closest(".slider__tab").addClass("active"), $(this).closest(".slider__tab").find(".slider__dropdown").stop().slideDown(), $(".techno").slick("slickGoTo", e - 1)
        }
    })
}

function checkTabsTechno() { $(".slider__tabs li").each(function() { $(this).hasClass("active") && ($(this).closest(".slider__tab").addClass("active"), $(this).closest(".slider__tab").find(".slider__dropdown").stop().slideDown()) }) }

function butter() {
    var e = $(".butter"),
        t = $(".header__nav ul");
    "block" == $(".butter").css("display") && t.stop().slideUp(), e.click(function() { $(this).toggleClass("active"), $(this).hasClass("active") ? t.stop().slideDown() : t.stop().slideUp() })
}

function scrollProgress() {
    var e = $(".green-line"),
        t = $("body").height() - $(window).height(),
        i = $(window).scrollTop(),
        o = 100 * i / t;
    e.css("width", o + "%")
}

function butterResize() { var e = $(".butter"); "block" != e.css("display") || e.hasClass("active") ? e.next("ul").css("display", "flex") : e.next("ul").css("display", "none") } jQuery.browser = {}, jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase()), jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase()), jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase()), jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase()), jQuery.extend(jQuery.expr[":"], {
    invalid: function(e) {
        var t = document.querySelectorAll(":invalid"),
            i = !1,
            o = t.length;
        if (o)
            for (var a = 0; o > a; a++)
                if (e === t[a]) { i = !0; break }
        return i
    }
});
var scroller = jQuery.browser.webkit ? "body" : "html";
$.scrollbarWidth = function() { var e, t, i; return void 0 === i && (e = $('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"), t = e.children(), i = t.innerWidth() - t.height(99).innerWidth(), e.remove()), i }, $(window).on("resize", function() { butterResize() }), $(window).on("scroll", function() { scrollProgress() }), $(document).ready(function() {
            butter(), tabsCheck(), toggleActive(), tabindex(), garageSlider(), showHideGarage(), garSlide(), closeColorpicker(), checkGate(), initConstructorView(), reinitConstructorsEvents(), colorPickInputEvent(), garageScrollText(), accordeon(), feedbacks(), googleMap("map"), seemoreServices(), technoSliderInit(), colorInit(), $("img").bind("contextmenu", function() { return !1 }), setInterval(function() { $(window).trigger("scroll") }, 500), $(".tel-mask") && $(".tel-mask").mask("+7 999 999-99-99 ");
    var e = $(".services__row-wrap.showed");
    $(e[e.length - 1]).css("max-height", "150px"), $('form button[type="submit"]').on("click", function(e) {
        if (e.preventDefault(), $(this).closest("form").find("input:invalid").length) $(this).closest("form").find("input:invalid").addClass("error");
        else {
            $.ajax({ url: $(this).closest("form").attr("action"), type: $(this).closest("form").attr("method"), data: $(this).closest("form").serialize() }), $.fancybox.open({ src: "#call_success", opts: { afterClose: function() { $("form").trigger("reset"), clearTimeout(t) } } });
            var t = null;
            t = setTimeout(function() { $("form").trigger("reset"), $.fancybox.close("#call_success") }, 3e3)
        }
    }), $("input").on("keyup", function() { $(this).removeClass("error") })
});