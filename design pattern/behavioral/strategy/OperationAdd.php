<?php


class OperationAdd implements Strategy
{

    public function doOperation(int $number, int $number_2)
    {
        return $number + $number_2;
    }
}
