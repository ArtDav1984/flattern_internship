/* ========== Toggle button ========== */
$("#toggle-button").click(function () {
  var hiddenTop = $(".hidden-top");
  var plus = $("#plus");
  var minus = $("#minus");

  $(hiddenTop).slideToggle();
  $(plus).toggleClass('plus');
  $(minus).toggleClass('minus');
});

/* ========== Form modals ========== */
$("#sign-up-link").click(function(){
    $("#sign-up-modal").modal();
});

$(".sign-in-link").click(function(){
    $("#sign-in-modal").modal();
});

$(".reset-link").click(function(){
    $("#reset-modal").modal();
});

/* ========== Adaptive menu ========== */
$(".toggle-button").click(function () {
    $(".nav-bar").slideToggle();
});

/* ========== Scroll to top ========== */
var scrolled;
var scrollTimer;
var toTop = $("#toTop");

showToTop();

window.onwheel = function() {
    showToTop();
};

window.onscroll = function(){
    showToTop();
};

$(toTop).click(function () {
    scrolled = window.pageYOffset;
    scrollToTop();
});

function scrollToTop() {
    if(scrolled > 20) {
        window.scrollTo(0, scrolled);
        scrolled = scrolled - 10;
        scrollTimer = setTimeout(scrollToTop, 2);
    } else {
        clearTimeout(scrollTimer);
        window.scrollTo(0, 0);
        $(toTop).hide();
    }
}

function showToTop(){
    if(window.pageYOffset > 20) {
        $(toTop).show();
    } else {
        $(toTop).hide();
    }
};