<?php

include __DIR__ . '/PriceObserver.php';
include __DIR__ . '/PriceObservable.php';

$observable = new PriceObservable();
$observer = new PriceObserver();
$observable->attach($observer);
$observable->changePrice();
