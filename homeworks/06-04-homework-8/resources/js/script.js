"use strict";
$(function () {
    $('.settings').click(function (e) {
        e.preventDefault();
        var closest = $(this).parents('tr');
        closest.children('td').children('.category-upload').css('display', 'block');
        closest.children('td').children('.cat_val').hide();
    })
});



