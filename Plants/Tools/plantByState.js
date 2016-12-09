$(document).ready(function() {
    plantByState.init();
})

var plantByState = new function() {

    this.init = function() {
        $('#map').usmap({
            'stateSpecificStyles': {
                //'WI' : {fill: '#f00'}
            },
            'stateSpecificHoverStyles': {
                //'WI' : {fill: '#ff0'}
            },
            'mouseoverState': {
                'WI' : function(event, data) {
                }
            },
            'click' : function(event, stateData) {

                var state = stateData.name;

                $.ajax({
                    url: '../Includes/searchState.php',
                    data: {term: state},
                    dataType: 'json',
                    type: 'post',
                    success: function(data) {
                        // For each plant, build a row and toss it in a table.
                        var table = document.getElementById("tblResults");
                        table.getElementsByTagName("tbody")[0].innerHTML = table.rows[0].innerHTML;

                        $.each(data, function(index, row){
                            var newRow = table.insertRow(-1);

                            var cell1 = newRow.insertCell(0);
                            var cell2 = newRow.insertCell(1);
                            var cell3 = newRow.insertCell(2);
                            var cell4 = newRow.insertCell(3);
                            var cell5 = newRow.insertCell(4);

                            cell1.innerHTML = row.PlantId;
                            cell2.innerHTML = row.CommonName;
                            cell3.innerHTML = row.Synonym;
                            cell4.innerHTML = row.Symbol;
                            cell5.innerHTML = row.ScientificName;

                        });
                    }
                })

            },
            'stateHoverAnimation': 150
        });


    }
}