<?php
require_once './vendor/autoload.php';



function pusher_trigger($channel, $event, $data)
{
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );

    $pusher = new Pusher\Pusher(
        '1b83e2c4c716b848126e',
        'ea1761926fca94cc21c0',
        '1840307',
        $options
    );

    $pusher->trigger($channel . '-channel', $event . '-event', $data);
}

// if (isset($_POST['msg'])) {
//     $data['username'] = $_SESSION['userName'];
//     $data['msg'] = $_POST['msg'];
//     $pusher->trigger('cmo-channel', 'cmo-event', $data);
// }
