<?php
include __DIR__.'/IMBDGenresCommand.php';
include __DIR__.'/Queue.php';

$queue = Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new IMBDGenresCommand);
}

$queue->work();
