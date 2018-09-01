
$(document).ready(function(){
    $('#searchbox').keyup(function () {
        var query = $('#searchbox').val();
        if(query > 1 ){
            $.ajax({
                method: 'GET',
                url: 'api/item',
                data: {
                    search : 1,
                    q : query
                },
                dataType: 'json',
                success: function (data) {
                    $.each(data, function(index, element) {
                        $('resultsearch').append($('<td>',
                            {text: element.item_name}
                            )
                        );
                    });

                }
            });
        }
    });
});
