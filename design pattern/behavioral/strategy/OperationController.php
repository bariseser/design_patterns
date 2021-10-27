<?php

class OperationController
{

    private $strategy;

    /**
     * OperationController constructor.
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute(int $number, int $number_2)
    {
        return $this->strategy->doOperation($number, $number_2);
    }
}
