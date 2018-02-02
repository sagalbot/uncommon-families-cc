$(document).ready(function () {

    var menuSticky = new Waypoint.Sticky({
        element: $('header')[0],
        offset: -1
    });

    var ctaSticky = new Waypoint.Sticky({
        element: $('.section-1 .cta')[0]
    });

    var section_1 = new Waypoint({
        element: $('.section-1'),
        handler: function (direction) {
            var className = "." + this.element[0].className;
            $(className).addClass('animate');
        },
        offset: 500
    });

    var section_2 = new Waypoint({
        element: $('.section-2'),
        handler: function (direction) {
            var className = "." + this.element[0].className;
            $(className).addClass('animate');
        },
        offset: 500
    });

});