
    // @todo add validation
    $('#calculator_form').submit(function (event) {
        event.preventDefault();
        console.log(app_domain);
        var data = {
            fromCountry : $('#fromCountry').val(),
            toCountry : $('#toCountry').val(),
            length : $('input[name=length]').val(),
            height : $('input[name=height]').val(),
            weight : $('input[name=weight]').val(),
            width : $('input[name=width]').val()
        };

        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: app_domain + 'calculate',
            data: data,
            dataType: 'json',
            success: function success(data) {
                var rates_table =  $('#rates_table');
                rates_table.removeClass('d-none');
                rates_table.find('tbody').empty();
                for (var i = 0; i < data['rates'].length; i++) {
                    rates_table.find('tbody')
                        .append($('<tr>')
                            .append($('<td>')
                                .append(data['rates'][i].carrier)
                            )
                            .append($('<td>')
                                .append(data['rates'][i].service)
                            )
                            .append($('<td>')
                                .append(data['rates'][i].rate)
                            )
                        );
                }
            }
        })
    });
