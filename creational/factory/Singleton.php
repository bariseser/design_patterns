<?php

namespace Bariseser\SingletonPattern;

class Singleton
{
    private static $instances = [];

    protected function __construct()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance(): self
    {
        $class = static::class;

        if (empty(self::$instances[$class])) {
            self::$instances[$class] = new static;
        }

        return self::$instances[$class];
    }
}
