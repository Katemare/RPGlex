$(document).ready(function () {
    $(".niceCheck").mousedown(function () {
        changeCheck(jQuery(this));
    });
    $(".niceCheck").each(function () {
        changeCheckStart(jQuery(this));
    });
    $(".niceRadio").each(function () {
        changeRadioStart(jQuery(this));
    });
    $("table.listing tr:nth-child(even)").addClass("light");
    $(".header-container > ul > li").hover(
        function () { $(this).children('ul').stop(true, true).slideDown('fast'); },
        function () { $(this).children('ul').stop(true, true).hide(); }
    );
    $('.header-container > ul > li').has('ul').addClass("dropdown").children('a').append('<span>&nbsp;</span>');
    $('#datepicker, #datepicker_from, #datepicker_to').each(function () {
        $(this).datepicker({
            inline: true,
            dateFormat: 'dd/mm/yy'
        });
    });
    $('#dialog_link, ul#icons li').each(function () {
        $(this).hover(
            function() { $(this).addClass('ui-state-hover'); },
            function() { $(this).removeClass('ui-state-hover'); }
        );
    });
    $('#datepicker-icon, #datepicker-icon-from, #datepicker-icon-to').each(function () {
        $(this).datepicker({
            showOn: "button",
            buttonImage: "/images/icons/ico-calendar.png",
            buttonImageOnly: true,
            dateFormat: 'dd/mm/yy'
        });
    });
    $('.thumb').each(function() {
        $(this).hover(
            function() { $(this).has('a.delete-item').children('a.delete-item').show() },
            function() { $(this).has('a.delete-item').children('a.delete-item').hide() }
        );
    });
});

function changeCheck(el) {
    var input = el.find("input").eq(0);
    if (!input.attr("checked")) {
        el.css("background-position","0 -16px");
        input.attr("checked", true);
    }
    else {
        el.css("background-position","0 0");
        input.attr("checked", false);
    }
    return true;
}

function changeCheckStart(el) {
    var input = el.find("input").eq(0);
    if (input.attr("checked")) {
        el.css("background-position","0 -16px");
    }
    return true;
}

function showpp() {
    if ($("#custom-message")) {
        $("#custom-message").showPopup();
    }
}

function hidepp() {
    if ($("#custom-message")) {
        $("#custom-message").hidePopup();
    }
}

function showpp_thumb_property() {
    if ($("#thumb-edit")) {
        $("#thumb-edit").showPopup();
    }
}

function hidepp_thumb_property() {
    if ($("#thumb-edit")) {
        $("#thumb-edit").hidePopup();
    }
}

function submit_to(form, url) {
    console.log(form);
    console.log(url);
    var form = $("#"+form);
    form.attr('action', url);
    form.submit();
}
