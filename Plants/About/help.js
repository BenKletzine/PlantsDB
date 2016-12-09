$(document).ready(function() {
    Help.init();
    console.log("test");
})

var Help = new function() {

    this.init = function() {

        $('#tabs').tabs({active: 0});

    }

}