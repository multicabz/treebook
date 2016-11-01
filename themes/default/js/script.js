$(".icon-search").click(function(){
    $(this).removeClass("btn-no-style");
    $("#search-field").toggleClass("hide").focus();

    var act = $('#search-field').hasClass("hide");

    if(act){
        $(this).addClass("btn-no-style");
    }

});