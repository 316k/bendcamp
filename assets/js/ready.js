$(function() {
    $('.discography, .artist-description').readmore({
        moreLink: '<a href="#" class="text-right">More...</a>',
        lessLink: '<a href="#" class="text-right">See less</a>',
        maxHeight: 400
    });
});