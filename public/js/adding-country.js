$('#country-form').submit(function(event) {
    event.preventDefault();
    var $countryInput = $('#country-input');
    var country = $countryInput.val();
    $.post(
        '/countries/ajaxadding',
        {
            country: country //Post Data
        },
        function (data) {
            //If result is success.
            if (data === '1') {
                $('#country-list').append(
                    $('<li>').attr('class', 'list-group-item').text(country)
                );
                //Clear input field.
                $countryInput.val('');
            }
        },
        'text'
    );
});