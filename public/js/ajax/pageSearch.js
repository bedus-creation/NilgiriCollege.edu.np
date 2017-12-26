$(document).ready(function () {
    $('#search-content').keyup(function () {
        var url = $('#base_url').val();
        $('#search-result').show();
        $('#search-result').html('<img src="' + url + '/img/loader.gif' + '" />');
        var query = $('#search-content').val();
        if(query==""){
            $('#search-result').hide();
        }
        $.get(url + "/admin/search/" + query, "", function (data, sucess) {
            $('#search-result').html(data);
        });
    });
});