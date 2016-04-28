var main = (function () {
    doConstruct = function () {
        this.init_callbacks = [];
    };
    doConstruct.prototype = {
        add_init_callback : function (func) {
            if (typeof(func) == 'function') {
                this.init_callbacks.push(func);
                return true;
            }
            else {
                return false;
            }
        }
    };
    return new doConstruct;
})();
$(document).ready(function () {
    $.each(main.init_callbacks, function (index, func) {
        func();
    });
});
var news = (function () {
    var doConstruct = function () {
        main.add_init_callback(this.show_modal);
    };
    doConstruct.prototype = {
        show_modal: function () {
            var open_button = $('#s-h-modal');
            $(open_button).click();
            $(open_button).toggle();
            $('.close').click(function(){
                $(open_button).toggle();
            });
            $(open_button).click(function(){
                $(open_button).toggle();
            });
        }
    };
    return new doConstruct;
})();



