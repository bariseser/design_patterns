<?php

namespace Bariseser\AdapterPattern;

class SportManager
{
    /**
     * @var ISport
     */
    private $adapter;

    /**
     * SportManager constructor.
     * @param ISport $adapter
     * @param array $data
     */
    public function __construct(ISport $adapter, array $data)
    {
        $this->adapter = $adapter;
        $this->adapter->setMatchData($data);
        return $this;
    }

    public function sendNotification()
    {
        return $this->adapter->sendMatchResult();
    }
}
