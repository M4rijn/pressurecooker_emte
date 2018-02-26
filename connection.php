<?php
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher("a356c13e9360934ca64c", "d43542725f6e4922904a", "480780", array('cluster' => 'eu'));

$pusher->trigger('my-channel', 'my-event', array('message' => $_POST['code']));

?>