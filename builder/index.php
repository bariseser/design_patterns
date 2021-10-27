<?php
include './vendor/autoload.php';

$builder = '\Bariseser\BuilderPattern\MysqlQueryBuilder';
$query = (new $builder())
    ->select("users", ['username', 'password'])
    ->where('user_id', 1000, "=")
    ->limit(0,1)
    ->getSQL();

echo $query.PHP_EOL;
