let onDiv = false;

$(document).ready(function () {
    animateDiv();
});

function makeNewPosition() {
    var h = $(window).height() - 50;
    var w = $(window).width() - 50;
    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);
    return [nh, nw];
}

function animateDiv() {
    var newq = makeNewPosition();
    var oldq = $('.a').offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);
    $('.a').animate({ top: newq[0], left: newq[1] }, speed, function () {
        if (!onDiv) {
            animateDiv();
        }
    });
};

function calcSpeed(prev, next) {
    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);
    var greatest = x > y ? x : y;
    var speedModifier = 0.1;
    var speed = Math.ceil(greatest / speedModifier);
    return speed / 2;
}

$(".container")
    .mouseenter(function () {
        onDiv = true;
    })
    // .mouseleave(function () {
    //     animateDiv();
    // });
