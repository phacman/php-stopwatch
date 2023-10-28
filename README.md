# Stopwatch Compact Version

The Stopwatch provides a way to profile code.

History with a list of original committers/commits: [shortlog.txt](shortlog.txt)

## Getting Started

```php
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
```

#### Original Example
```php
use PhacMan\Stopwatch\Stopwatch;
$stopwatch = new Stopwatch();
// optionally group events into sections (e.g. phases of the execution)
$stopwatch->openSection();
// starts event named 'eventName'
$stopwatch->start('eventName');
// ... run your code here
// optionally, start a new "lap" time
$stopwatch->lap('foo');
// ... run your code here
$event = $stopwatch->stop('eventName');
$stopwatch->stopSection('phase_1');
```

### Resources

* Original repository: https://github.com/symfony/stopwatch
