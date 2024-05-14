$(document).ready(function(){
    $("#notify").click(function(){
        $("#notice-board").stop().toggle();
        $(this).toggleClass("notify-click-active")
    })
})