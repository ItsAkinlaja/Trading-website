"use strict";

function layoutsColors() { $(".sidebar").is("[data-background-color]") ? $("html").addClass("sidebar-color") : $("html").removeClass("sidebar-color"), $("body").is("[data-image]") ? $("body").css("background-image", 'url("' + $("body").attr("data-image") + '")') : $("body").css("background-image", "") }

function legendClickCallback(a) {
    for (var e = (a = a || window.event).target || a.srcElement;
        "LI" !== e.nodeName;) e = e.parentElement;
    var s = e.parentElement,
        o = parseInt(s.classList[0].split("-")[0], 10),
        i = Chart.instances[o],
        n = Array.prototype.slice.call(s.children).indexOf(e);
    i.legend.options.onClick.call(i, a, i.legend.legendItems[n]), i.isDatasetVisible(n) ? e.classList.remove("hidden") : e.classList.add("hidden")
}

function readURL(a) {
    if (a.files && a.files[0]) {
        var e = new FileReader;
        e.onload = function(e) { $(a).parent(".input-file-image").find(".img-upload-preview").attr("src", e.target.result) }, e.readAsDataURL(a.files[0])
    }
}

function showPassword(a) { var e = $(a).parent().find("input"); "password" === e.attr("type") ? e.attr("type", "text") : e.attr("type", "password") }

function changeContainer() { 1 == showSignIn ? containerSignIn.css("display", "block") : containerSignIn.css("display", "none"), 1 == showSignUp ? containerSignUp.css("display", "block") : containerSignUp.css("display", "none") }
$(".nav-search .input-group > input").focus(function(a) { $(this).parent().addClass("focus") }).blur(function(a) { $(this).parent().removeClass("focus") }), $(function() { $('[data-toggle="tooltip"]').tooltip(), $('[data-toggle="popover"]').popover(), layoutsColors() }), $(document).ready(function() {
    $(".btn-refresh-card").on("click", function() {
        var a = $(this).parents(".card");
        a.length && (a.addClass("is-loading"), setTimeout(function() { a.removeClass("is-loading") }, 3e3))
    });
    var a = $(".sidebar .scrollbar");
    a.length > 0 && a.scrollbar();
    var e = $(".main-panel .content-scroll");
    e.length > 0 && e.scrollbar();
    var s = $(".messages-scroll");
    s.length > 0 && s.scrollbar();
    var o = $(".tasks-scroll");
    o.length > 0 && o.scrollbar();
    var i = $(".quick-scroll");
    i.length > 0 && i.scrollbar();
    var n = $(".message-notif-scroll");
    n.length > 0 && n.scrollbar();
    var r = $(".notif-scroll");
    r.length > 0 && r.scrollbar();
    var l = $(".quick-actions-scroll");
    l.length > 0 && l.scrollbar();
    var t = $(".dropdown-user-scroll");
    t.length > 0 && t.scrollbar(), $(".scroll-bar").draggable(), $("#search-nav").on("shown.bs.collapse", function() { $(".nav-search .form-control").focus() });
    var c = !1,
        d = !1,
        g = !1,
        p = !1,
        h = 0,
        m = 0,
        u = 0,
        v = 0,
        f = 0,
        b = 0;
    if (!c) {
        (C = $(".sidenav-toggler")).on("click", function() { 1 == h ? ($("html").removeClass("nav_open"), C.removeClass("toggled"), h = 0) : ($("html").addClass("nav_open"), C.addClass("toggled"), h = 1) }), c = !0
    }
    if (!m) {
        var C = $(".quick-sidebar-toggler");
        C.on("click", function() { 1 == h ? ($("html").removeClass("quick_sidebar_open"), $(".quick-sidebar-overlay").remove(), C.removeClass("toggled"), m = 0) : ($("html").addClass("quick_sidebar_open"), C.addClass("toggled"), $('<div class="quick-sidebar-overlay"></div>').insertAfter(".quick-sidebar"), m = 1) }), $(".wrapper").mouseup(function(a) {
            var e = $(".quick-sidebar");
            a.target.className == e.attr("class") || e.has(a.target).length || ($("html").removeClass("quick_sidebar_open"), $(".quick-sidebar-toggler").removeClass("toggled"), $(".quick-sidebar-overlay").remove(), m = 0)
        }), $(".close-quick-sidebar").on("click", function() { $("html").removeClass("quick_sidebar_open"), $(".quick-sidebar-toggler").removeClass("toggled"), $(".quick-sidebar-overlay").remove(), m = 0 }), m = !0
    }
    if (!d) {
        var w = $(".topbar-toggler");
        w.on("click", function() { 1 == u ? ($("html").removeClass("topbar_open"), w.removeClass("toggled"), u = 0) : ($("html").addClass("topbar_open"), w.addClass("toggled"), u = 1) }), d = !0
    }
    if (!g) {
        var k = $(".toggle-sidebar");
        $(".wrapper").hasClass("sidebar_minimize") && (v = 1, k.addClass("toggled"), k.html('<i class="icon-options-vertical"></i>')), k.on("click", function() { 1 == v ? ($(".wrapper").removeClass("sidebar_minimize"), k.removeClass("toggled"), k.html('<i class="icon-menu"></i>'), v = 0) : ($(".wrapper").addClass("sidebar_minimize"), k.addClass("toggled"), k.html('<i class="icon-options-vertical"></i>'), v = 1), $(window).resize() }), g = !0
    }
    if (!p) {
        var _ = $(".page-sidebar-toggler");
        _.on("click", function() { 1 == f ? ($("html").removeClass("pagesidebar_open"), _.removeClass("toggled"), f = 0) : ($("html").addClass("pagesidebar_open"), _.addClass("toggled"), f = 1) });
        $(".page-sidebar .back").on("click", function() { $("html").removeClass("pagesidebar_open"), _.removeClass("toggled"), f = 0 }), p = !0
    }
    var y = $(".sidenav-overlay-toggler");
    $(".wrapper").hasClass("is-show") && (b = 1, y.addClass("toggled"), y.html('<i class="icon-options-vertical"></i>')), y.on("click", function() { 1 == b ? ($(".wrapper").removeClass("is-show"), y.removeClass("toggled"), y.html('<i class="icon-menu"></i>'), b = 0) : ($(".wrapper").addClass("is-show"), y.addClass("toggled"), y.html('<i class="icon-options-vertical"></i>'), b = 1), $(window).resize() }), g = !0, $(".sidebar").hover(function() { $(".wrapper").hasClass("sidebar_minimize") && $(".wrapper").addClass("sidebar_minimize_hover") }, function() { $(".wrapper").hasClass("sidebar_minimize") && $(".wrapper").removeClass("sidebar_minimize_hover") }), $(".nav-item a").on("click", function() { $(this).parent().find(".collapse").hasClass("show") ? $(this).parent().removeClass("submenu") : $(this).parent().addClass("submenu") }), $(".messages-contact .user a").on("click", function() { $(".tab-chat").addClass("show-chat") }), $(".messages-wrapper .return").on("click", function() { $(".tab-chat").removeClass("show-chat") }), $('[data-select="checkbox"]').change(function() {
        var a = $(this).attr("data-target");
        $(a).prop("checked", $(this).prop("checked"))
    }), $(".form-group-default .form-control").focus(function() { $(this).parent().addClass("active") }).blur(function() { $(this).parent().removeClass("active") })
}), $('.input-file-image input[type="file"').change(function() { readURL(this) }), $(".show-password").on("click", function() { showPassword(this) });
var containerSignIn = $(".container-login"),
    containerSignUp = $(".container-signup"),
    showSignIn = !0,
    showSignUp = !1;
$("#show-signup").on("click", function() { showSignUp = !0, showSignIn = !1, changeContainer() }), $("#show-signin").on("click", function() { showSignUp = !1, showSignIn = !0, changeContainer() }), changeContainer(), $(".form-floating-label .form-control").keyup(function() { "" !== $(this).val() ? $(this).addClass("filled") : $(this).removeClass("filled") });