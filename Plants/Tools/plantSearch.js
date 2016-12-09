$(document).ready(function() {
    plantSearch.init();
})

var plantSearch = new function() {

    this.init = function() {

        $("#txtPlantSearch").autocomplete({
            source: function(request, response){
                $.ajax({
                    url: '../Includes/searchPlant.php',
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(results){
                        response(results);
                    },
                    error: function( jxhr, textStatus, errorThrown) {
                        console.log(errorThrown);
                    }

                })
            },
            minLength: 4,
            select: function(event, data) {
                $("#rowComName").text(data.item.CommonName);
                $("#rowSciName").text(data.item.ScientificName);
                $("#rowFamily").text(data.item.Family);
                $("#rowSymbol").text(data.item.Symbol);
                $("#rowSynonym").text(data.item.Synonym);
                $("#rowId").text(data.item.PlantId);
            }
        })

    }

}