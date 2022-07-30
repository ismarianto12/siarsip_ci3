// using base on aplication this


var url = window.location.href;
$('ul.sidebar-menu a').filter(function () {
    return this.href != url;
}).parent().removeClass('active');

$('ul.sidebar-menu a').filter(function () {
    return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function () {
    return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
// script add window 
$(window).on("load", function () {
    // Scroll ke menu aktif perlu dilakukan di onload sesudah semua loading halaman selesai
    // Tidak bisa di document.ready
    // preparing var for scroll via query selector
    var activated_menu = $('li.treeview.active.menu-open')[0];
    // autscroll to activated menu/sub menu
    if (activated_menu) {
        activated_menu.scrollIntoView({
            behavior: 'smooth'
        });
    }
});


function scrollTampil(elem) {
    elem.scrollIntoView({
        behavior: 'smooth'
    });
}

$('ul.sidebar-menu').on('expanded.tree', function (e) {
    // Manipulasi menu perlu ada tenggang waktu -- supaya dilakukan sesudah
    // event lain selesai
    e.stopImmediatePropagation();
    setTimeout(scrollTampil($('li.treeview.menu-open')[0]), 500);
});

$(window).on('scroll', function () {
    if ($(this).scrollTop() > 100) {
        $(".scrollToTop").fadeIn();
    } else {
        $(".scrollToTop").fadeOut();
    }
});

$(".scrollToTop").on('click', function (e) {
    $("html, body").animate({
        scrollTop: 0
    }, 500);
    return false;
});