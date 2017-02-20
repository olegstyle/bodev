/**
 * Created by olegs on 10.02.2017.
 */

/** Float Label Pattern Plugin for Bootstrap 3.1.0 by Travis Wilson
 **************************************************/

(function ($) {
    $.fn.floatLabels = function (options) {

        // Settings
        var self = this;
        var settings = $.extend({}, options);


        // Event Handlers
        function registerEventHandlers() {
            self.on('input keyup change', 'input, textarea', function () {
                actions.swapLabels(this);
            });
        }


        // Actions
        var actions = {
            initialize: function() {
                self.each(function () {
                    var $this = $(this);
                    var $label = $this.children('label');
                    var $field = $this.find('input,textarea').first();

                    if ($this.children().first().is('label')) {
                        $this.children().first().remove();
                        $this.append($label);
                    }

                    var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                    $label.data('placeholder-text', placeholderText);
                    $label.data('original-text', $label.text());

                    if ($field.val() == '') {
                        $field.addClass('empty')
                    }
                });
            },
            swapLabels: function (field) {
                var $field = $(field);
                var $label = $(field).siblings('label').first();
                var isEmpty = Boolean($field.val());

                if (isEmpty) {
                    $field.removeClass('empty');
                    $label.text($label.data('original-text'));
                }
                else {
                    $field.addClass('empty');
                    $label.text($label.data('placeholder-text'));
                }
            }
        }


        // Initialization
        function init() {
            registerEventHandlers();

            actions.initialize();
            self.each(function () {
                actions.swapLabels($(this).find('input,textarea').first());
            });
        }
        init();


        return this;
    };

    $(function () {
        $('.float-label-control').floatLabels();
    });
})(jQuery);


/** global
 **************************************************/

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }

    document.cookie = updatedCookie;
}

$(function () {
   $(document).ready(function () {
        function changeTab(tab) {
           tab.parent().find('hr').css({
               width: tab.width(),
               'margin-left': tab.position().left + parseInt(tab.css('padding-left').split('px')[0]),
               'margin-top': tab.position().top + tab.height() + parseInt(tab.css('padding-top').split('px')[0])
           });
        }
        $('.tabs .tab.active').each(function () {
           changeTab($(this));
        });
        $('.tabs .tab').click(function () {
           var tab = $(this);
           tab.parent().find('.tab').removeClass('active');
           tab.addClass('active');
           changeTab($(this));
        });
        $(window).resize(function() {
           $('.tabs .tab.active').each(function () {
               changeTab($(this));
           });
        });
        $('#contacts').find('.float-label-control label').click(function () {
           $(this).parent().find('input, textarea').eq(0).focus();
        });
        $('.header-menu > li > a').click(function () {
           $('.header').focus();
        });

        //modern scrollbar
        $(".project .project-content").niceScroll();

       // skill tabs click
       var skills = $('#skills');
       var skillsGrid = $('#skills-grid');
       skillsGrid.mixItUp({
           pagination: { limit: 6 },
           load: { filter: '.skill-group' }
       });
       skills.find('.tabs .tab').click(function () {
           var g = $(this).data('group');
           if (g == '0') {
               skillsGrid.mixItUp('filter', '.skill-group');
           } else {
               skillsGrid.mixItUp('filter', '.skill-group-' + g);
           }
       });
       skills.find('.container > .btn-bo-wrapper > .btn-bo').click(function () {
           skillsGrid.mixItUp('paginate', { limit: 999 });
           $(this).remove();
       });

        //project tabs click
       var portfolio = $("#portfolio");
       var projectGrid = $('#portfolio-grid');
       projectGrid.mixItUp({
           pagination: { limit: 4 },
           load: { filter: '.project-group' }
       });
       portfolio.find('.tabs .tab').click(function () {
           var g = $(this).data('group');
           if (g == '0') {
               projectGrid.mixItUp('filter', '.project-group');
           } else {
               projectGrid.mixItUp('filter', '.project-group-' + g);
           }

       });
       portfolio.find('.projects-wrapper > .btn-bo-wrapper .btn-bo').click(function () {
           projectGrid.mixItUp('paginate', { limit: 999 });
           $(this).remove();
       });

       //lang click
       $('.header .lang-wrapper .lang:not(.active)').click(function () {
           setCookie('lang', $(this).data('lang'), {
               expires: 1000*36000
           });
           window.location.reload(false);
       });
   });
});