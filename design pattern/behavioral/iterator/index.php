<?php
include __DIR__ . '/CsvIterator.php';

$iterator = new CsvIterator(__DIR__ . '/cats.csv', ',', true);

foreach ($iterator as $row) {
    print_r($row);
}
