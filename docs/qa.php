<?php

use PhacMan\Stopwatch\Stopwatch;

require dirname(__DIR__, 1).'/vendor/autoload.php';

$stopwatch = new Stopwatch();
$stopwatch->start('qa');
sleep(10);
$result = $stopwatch->stop('qa');

print_r([
    $result->getName() => [
        'duration' => $result->getDuration(),
        'memory' => $result->getMemory(),
        'time_start' => $result->getStartTime(),
        'time_end' => $result->getEndTime(),
    ],
]);

/*
Array
(
    [qa] => Array
        (
            [duration] => 10000
            [memory] => 2097152
            [time_start] => 0
            [time_end] => 10000
        )

)
*/
