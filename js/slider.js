/* ========== Features slider ========== */
var featuresIndex = 0;
var timer;

autoSlider();

function slidesFeatures(n) {
    clearTimeout(timer);
    featuresSlider(featuresIndex += n);
}

function featuresSlider(n) {
    var i;
    var slides = $(".slides");

    if (n > $(slides).length) {featuresIndex = 1}

    if (n < 1) {featuresIndex = $(slides).length}

    for (i = 0; i < $(slides).length; i++) {
        $(slides[i]).css('display', 'none');
    }

    $(slides[featuresIndex - 1]).css('display', 'block');

    timer = setTimeout(autoSlider, 6000);
}

function autoSlider() {
    var i;
    var slides = $(".slides");

    if (featuresIndex >= $(slides).length) {featuresIndex = 0}

    for (i = 0; i < $(slides).length; i++) {
        $(slides[i]).css('display', 'none');
    }

    featuresIndex ++;
    $(slides[featuresIndex - 1]).css('display', 'block');

    timer = setTimeout(autoSlider, 6000);
}

/* ========== Portfolio slider ========== */
function openModal() {
    $("#slideModal").show();
}

function closeModal() {
    $("#slideModal").hide();
}

var portfolioIndex = 1;

function slidesPortfolio(n) {
    portfolioSlider(portfolioIndex += n);
}

function currentSlide(n) {
    portfolioSlider(portfolioIndex = n);
}

function portfolioSlider(n) {
    var i;
    var slides = $(".portfolio-slides");

    if (n > $(slides).length) {portfolioIndex = 1}

    if (n < 1) {portfolioIndex = $(slides).length}

    for (i = 0; i < $(slides).length; i++) {
        $(slides[i]).css('display', 'none');
    }

    $(slides[portfolioIndex - 1]).css('display', 'block');
}

/* ========== Clients slider ========== */
var left = 0;
var strip = $("#slider-strip");
var imgLength = $(".client-logo");
var width = '';

var clientsSliderWidth = ($(".clients-slider").css('width')).split('');
var arrReverse = clientsSliderWidth.reverse();
    arrReverse.splice(0, 2,"");
var arrWidth = arrReverse.reverse();

for(var i = 0; i < arrWidth.length; i ++) {
    width += arrWidth[i];
}

var end = -(($(imgLength).length * 178) - width);

function leftSlide() {

    if(left < end) {
        left = 0;
    } else {
        left = left - 178;
    }

    $(strip).css('left', left + 'px');
}

function rightSlide() {

    if(left >= 0) {
        left = 0;
    } else {
        left = left + 178;
    }

    $(strip).css('left', left + 'px');
}