define([
    "jquery"
], function($){
        "use strict";
        return function(config, element) {
            document.addEventListener("contextmenu", function(e){
                if (e.target.nodeName === "IMG") {
                    console.log("Right Click is Disabled from the Image for the Copy Paste Reason");
                    e.preventDefault();
                }
            }, false);
        }
    }
)
