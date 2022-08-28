define([
    "jquery"
], function($){
        "use strict";
        return function(config, element) {
            document.addEventListener('contextmenu',event=>event.preventDefault());
            console.log("Right Click is Disabled for this store");
        }
    }
)
