$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#talkSendMessage').on('submit', function(e) {
        e.preventDefault();
        var url, request, tag, data;
        tag = $(this);
        url = __baseUrl + '/messages/send';
        data = tag.serialize();

        request = $.ajax({
            method: "post",
            url: url,
            data: data
        });

        request.done(function (response) {
            if (response.status == 'success') {
                $('#talkMessages').append(response.html);
                tag[0].reset();
            }
        });

    });


    $('body').on('click', '.talkDeleteMessage', function (e) {
        e.preventDefault();
        var tag, url, id, request;

        tag = $(this);
        id = tag.data('messages-id');
        url = __baseUrl + '/ajax/messages/delete/' + id;

        if(!confirm('Do you want to delete this messages?')) {
            return false;
        }

        request = $.ajax({
            method: "post",
            url: url,
            data: {"_method": "DELETE"}
        });

        request.done(function(response) {
           if (response.status == 'success') {
                $('#messages-' + id).hide(500, function () {
                    $(this).remove();
                });
           }
        });
    })
});
