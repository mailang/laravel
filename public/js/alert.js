$.extend({
    alert: function (a) {
        $(".info").html(" <div class=\"alert alert-danger\">\n" + a +"\n</div>");
        $("body").scrollTop(0);
    }
});