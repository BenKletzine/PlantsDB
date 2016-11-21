$(document).ready(function() {
    plantByState.init();
})

var plantByState = new function() {

    this.init = function() {
        $('#map').usmap({
            'stateSpecificStyles': {
                //'AK' : {fill: '#f00'}
            },
            'stateSpecificHoverStyles': {
                //'HI' : {fill: '#ff0'}
            },
            'mouseoverState': {
                'HI' : function(event, data) {
                }
            },
            'click' : function(event, data) {
                console.log(data);
                alert("clicked on: " + data.name);
            },
            'stateHoverAnimation': 150
        });

        $('#over-md').click(function(event){
            $('#map').usmap('trigger', 'MD', 'mouseover', event);
        });

        $('#out-md').click(function(event){
            $('#map').usmap('trigger', 'MD', 'mouseout', event);
        });
    }
}