/**
 * Created by olegs on 10.02.2017.
 */

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
   });
});