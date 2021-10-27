<?php

include './PriceObserver.php';
include './PriceObservable.php';

$observable = new PriceObservable();
$observer = new PriceObserver();
$observable->attach($observer);
$observable->changePrice();
