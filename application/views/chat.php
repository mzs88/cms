<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c.m.o | chat</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .chat_title {
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 9pt;
            color: blue;
        }

        .chat_body_host {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 12pt;
            color: black;
        }

        .chat_body_guest {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 12pt;
            color: black;
        }

        .chat_area {
            float: left;
            height: 400px;
            overflow-x: hidden;
            overflow-y: auto;
            width: 100%;
            border: 1px solid;

        }

        .chat_area ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        .chat_area li {
            padding-left: 3px;
            padding-right: 10px;
            padding-top: 5px;
            white-space: pre;
            white-space: pre-line;
            width: 100%;
            /* padding: 14px 0px 0 0; */
        }



        /* .chat_area li .chat-img1 img {
            height: 40px;
            width: 40px;
        }

        .chat_area .chat-body1 {
            margin-left: 50px;
        }

        .chat-body1 p {
            background: #fbf9fa none repeat scroll 0 0;
            padding: 10px;
        }

        .chat_area .admin_chat .chat-body1 {
            margin-left: 0;
            margin-right: 50px;
        }

        .chat_area li:last-child {
            padding-bottom: 10px;
        } */

        #message {
            width: 90%;
            height: 50px;
            box-sizing: border-box;
        }

        #sendchat {
            width: 10%;
            height: 50px;
        }

        #userName {
            margin: 5;
            padding: 5;
            width: 100%;
            height: 30px;
        }

        .chat_foother {
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .chat_foother_body {
            width: 100%;
            display: inline-flex;
            flex-direction: row;
        }
    </style>
</head>

<body>
    <div id="tbChat">
        <div>
            <form action="<?= base_url('login/logout') ?>" method="post">
                <button type="submit" id="btnLogout">Logout</button>
            </form>
            User Login : <?= (!empty($this->session->userdata('user')) ? $this->session->userdata('user') : 'Offline'); ?>
        </div>
        <div class="chat_area">
            <ul id="appendchat">
            </ul>
        </div>
        <div class="chat_footer">
            <div class="chat_foother_body">
                <textarea name="message" id="message" style="height: 30;"></textarea>
                <button type="submit" id="sendchat">></button>
            </div>
        </div>
        <input type="checkbox" name="enterChat" id="enterChat" checked>Tekan Enter untuk kirim pesan.
    </div>
    <script>
        var base_url = "<?= base_url(); ?>"
        var sesUser = "<?= $this->session->userdata('user') ?>"
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="./assets/cws.js"></script>
</body>

</html>