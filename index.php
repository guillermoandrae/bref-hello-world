<?php declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Guillermoandrae\HelloWorld;

lambda(function (array $event) {
    return HelloWorld::greet($event['name']);
});
