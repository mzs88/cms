
$(document).ready(function(){
    var pusher = new Pusher('1b83e2c4c716b848126e', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('cmo-channel');
            channel.bind('cmo-event', function(data) {
                sendMessage(data);
                playNotification();
            });
    
    // Pusher.logToConsole = true;

    function playNotification() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', './assets/correct.wav');
        audioElement.setAttribute('autoplay', 'autoplay');
        //audioElement.load()
        $.get();
        audioElement.addEventListener("load", function() {
            audioElement.play();
        }, true);
    }
    function sendMessage(data) {
        // console.log("INI SESSION : " + sesUser);
        // console.log("INI msgId : " + data.user);
        time = new Date().toLocaleTimeString([], {
            hour: '2-digit',
            minute: "2-digit"
        });
        if (data.user == sesUser) {
            msg = '';
            msg += '<li class="chat_body1" style="width:100%"><span class="chat_title">' + sesUser + '-' + time + '</span><br><span class="chat_body_guest">' + data.msg + '</span></li><hr>';
            $("html body .chat_area").animate({
                scrollTop: $(document).height()
            }, 1000);
            $('#appendchat').append(msg)
            $('#message').val("");
        } else {
            msg = '';
            msg += '<li class="chat_body1" style="width:100%"><span class="chat_title">' + data.user + '-' + time + '<span><br><span class="chat_body_host">' + data.msg + '</span></li><hr>';
            $("html body .chat_area").animate({
                scrollTop: $(document).height()
            }, 1000);
            $('#appendchat').append(msg)
            $('#message').val("");
        }
        // alert($('#messages').val());
    }

    $('#sendchat').on('click', function() {
        // console.log('send chat');
        $.ajax({
            enctype: 'multipart/form-data',
            url: base_url + "chat/send",
            type: 'post',
            data: {
                msg: $("#message").val(),
            },
            success: function(data) {
                // console.log(data);
            }
        });
    })
    $('#message').keypress(function(e) {
        if($('input[name="enterChat"]').is(':checked')){
            var key = e.which;
            if (e.which == 13 && !e.shiftKey) // the enter key code
            {
                e.preventDefault();
                $.ajax({
                    url: base_url + "chat/send",
                    type: 'post',
                    data: {
                        msg: $("#message").val(),
                    },
                    success: function(data) {
                        // console.log(data);
                    }
                });
            }
        }
    });
});